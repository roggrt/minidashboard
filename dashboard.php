<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos (debes reemplazar esto con tus propios datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los permisos del usuario
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user_permissions WHERE user_id = $user_id";
$permissions_result = $conn->query($sql);

$permissions = array();
if ($permissions_result->num_rows > 0) {
    while ($row = $permissions_result->fetch_assoc()) {
        $permissions[$row['permission']] = $row['enabled'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOAO Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 flex flex-col min-h-screen">
    <?php include 'components/navbar.php'; ?>

    <div class="flex flex-grow">
        <?php include 'components/sidebar.php'; ?>

        <!-- Contenido principal -->
        <main class="flex-grow p-4" id="content">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                <?php
                $items = array(
                    array('icon' => 'fa-truck-moving', 'alert' => 'Movimientos de Inventario', 'permission' => 'inventory_movements'),
                    array('icon' => 'fa-tags', 'alert' => 'Ajuste de Precios', 'permission' => 'price_adjustment'),
                    array('icon' => 'fa-cash-register', 'alert' => 'Aperturar Caja', 'permission' => 'open_cash_register'),
                    array('icon' => 'fa-piggy-bank', 'alert' => 'Aperturar Caja Chica', 'permission' => 'open_petty_cash'),
                    array('icon' => 'fa-door-closed', 'alert' => 'Cerrar Caja', 'permission' => 'close_cash_register'),
                    array('icon' => 'fa-door-open', 'alert' => 'Cerrar Caja Chica', 'permission' => 'close_petty_cash'),
                    array('icon' => 'fa-users', 'alert' => 'Clientes', 'permission' => 'customers'),
                    array('icon' => 'fa-shopping-cart', 'alert' => 'Compras', 'permission' => 'purchases'),
                    array('icon' => 'fa-money-bill-wave', 'alert' => 'Cuentas por Cobrar', 'permission' => 'accounts_receivable'),
                    array('icon' => 'fa-money-bill-alt', 'alert' => 'Cuentas por Pagar', 'permission' => 'accounts_payable'),
                    array('icon' => 'fa-file-invoice-dollar', 'alert' => 'Facturación', 'permission' => 'invoicing'),
                    array('icon' => 'fa-box-open', 'alert' => 'Existencia', 'permission' => 'inventory'),
                    array('icon' => 'fa-list-alt', 'alert' => 'Listado de Ventas', 'permission' => 'sales_list'),
                    array('icon' => 'fa-money-check-alt', 'alert' => 'Movimiento de Caja', 'permission' => 'cash_movement'),
                    array('icon' => 'fa-money-check', 'alert' => 'Movimiento de Caja Chica', 'permission' => 'petty_cash_movement'),
                    array('icon' => 'fa-tools', 'alert' => 'Servicio Técnico', 'permission' => 'technical_service'),
                    array('icon' => 'fa-box', 'alert' => 'Productos', 'permission' => 'products'),
                    array('icon' => 'fa-file-contract', 'alert' => 'Cotización', 'permission' => 'quotation'),
                    array('icon' => 'fa-truck', 'alert' => 'Proveedores', 'permission' => 'suppliers'),
                    array('icon' => 'fa-clipboard-list', 'alert' => 'Pedidos', 'permission' => 'orders')
                );
                foreach ($items as $item):
                    $permissionEnabled = isset($permissions[$item['permission']]) && $permissions[$item['permission']] == 1;
                    ?>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 flex flex-col items-center justify-center transition-colors duration-300 <?php echo $permissionEnabled ? 'hover:bg-blue-100 dark:hover:bg-blue-900' : ''; ?>">
                        <i class="fas <?php echo $item['icon']; ?> text-4xl mb-2"></i>
                        <button class="btn w-full h-full text-left px-4 py-2 rounded-lg <?php echo $permissionEnabled ? 'text-gray-800 dark:text-white hover:text-blue-800 dark:hover:text-blue-300' : 'text-gray-400 dark:text-gray-600 cursor-not-allowed'; ?>" data-alert="<?php echo $item['alert']; ?>" <?php echo $permissionEnabled ? '' : 'disabled'; ?>>
                            <span><?php echo $item['alert']; ?></span>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <script>
        const buttons = document.querySelectorAll('.btn:not([disabled])');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const alertText = btn.dataset.alert;
                showAlert(alertText);
            });
        });

        function showAlert(text) {
            const isDarkMode = document.documentElement.classList.contains('dark');
            const bgColor = isDarkMode ? 'bg-gray-800' : 'bg-white';
            const textColor = isDarkMode ? 'text-white' : 'text-gray-800';

            const alert = document.createElement('div');
            alert.classList.add('fixed', 'bottom-4', 'left-4', 'p-4', 'rounded-lg', 'shadow-md', bgColor, textColor);
            alert.innerHTML = `<p>${text}</p>`;

            document.body.appendChild(alert);

            setTimeout(() => {
                alert.remove();
            }, 3000);
        }

        const toggleDarkMode = document.getElementById('toggleDarkMode');
        toggleDarkMode.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDarkMode = document.documentElement.classList.contains('dark');
            toggleDarkMode.innerHTML = isDarkMode ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
        });

        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('md:flex');
        });

        const userDropdown = document.getElementById('userDropdown');
        const userMenu = document.getElementById('userMenu');
        userDropdown.addEventListener('click', () => {
            userMenu.classList.toggle('hidden');
        });

        const showNotifications = document.getElementById('showNotifications');
        const notificationsMenu = document.getElementById('notificationsMenu');
        showNotifications.addEventListener('click', () => {
            notificationsMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>