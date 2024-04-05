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

        .module-item {
            transition: transform 0.2s ease-in-out;
        }

        .module-link {
            transition: color 0.2s ease-in-out;
        }

        .module-item:hover {
            transform: scale(1.05);
        }

        .module-link:hover .module-icon {
            animation: bounce 0.5s ease-in-out;
        }

        .module-link:hover .module-name {
            color: #4c51bf;
        }

        .breadcrumb h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #4c51bf;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            transition: text-shadow 0.3s ease-in-out;
        }

        .breadcrumb h1:hover {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
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
                
                <div class="main-content-wrap sidenav-open d-flex flex-column">
                    <div class="main-content">
                        <div class="card-body">
                            <div class="breadcrumb">
                                <h1 class="i-Home1">Inicio</h1>
                                <ul>
                                    <li>
                                        <a>Página Principal del Sistema</a>
                                    </li>
                                    <li><a href="<?php print $base_url ?>login/inicio"><i class="i-Home1"></i> Inicio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="separator-breadcrumb border-top"></div>
                        <div class="card">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-10 gap-2">
                                <?php
                                if (@$modulos) {
                                    foreach ($modulos as $modulo) {
                                        ?>
                                        <div class="bg-white rounded-lg shadow-md p-4 shadow-blue-800 module-item">
                                            <a title="<?php echo $modulo->nombre; ?>"
                                               href="<?php echo ($modulo->url) ? $base_url . $modulo->url : '#'; ?>"
                                               class="flex flex-col items-center <?php echo ($modulo->url) ? '' : $modulo->clase; ?> module-link">
                                                <i class="<?php echo $modulo->icono; ?> text-2xl text-blue-600 mb-1 module-icon"></i>
                                                <span class="text-gray-800 module-name"><?php echo $modulo->nombre; ?></span>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo '<div class="col-md-12 text-center"><h3>NO HAY MODULOS ACTIVOS</h3></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>