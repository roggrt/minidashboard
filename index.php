<!DOCTYPE html>
<html lang="en" class="dark">
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
                // Iconos y alertas de ejemplo
                $items = [
                    ['icon' => 'fa-truck-moving', 'alert' => 'Movimientos de Inventario'],
                    ['icon' => 'fa-tags', 'alert' => 'Ajuste de Precios'],
                    ['icon' => 'fa-cash-register', 'alert' => 'Aperturar Caja'],
                    ['icon' => 'fa-piggy-bank', 'alert' => 'Aperturar Caja Chica'],
                    ['icon' => 'fa-door-closed', 'alert' => 'Cerrar Caja'],
                    ['icon' => 'fa-door-open', 'alert' => 'Cerrar Caja Chica'],
                    ['icon' => 'fa-users', 'alert' => 'Clientes'],
                    ['icon' => 'fa-shopping-cart', 'alert' => 'Compras'],
                    ['icon' => 'fa-money-bill-wave', 'alert' => 'Cuentas por Cobrar'],
                    ['icon' => 'fa-money-bill-alt', 'alert' => 'Cuentas por Pagar'],
                    ['icon' => 'fa-file-invoice-dollar', 'alert' => 'Facturación'],
                    ['icon' => 'fa-box-open', 'alert' => 'Existencia'],
                    ['icon' => 'fa-list-alt', 'alert' => 'Listado de Ventas'],
                    ['icon' => 'fa-money-check-alt', 'alert' => 'Movimiento de Caja'],
                    ['icon' => 'fa-money-check', 'alert' => 'Movimiento de Caja Chica'],
                    ['icon' => 'fa-tools', 'alert' => 'Servicio Técnico'],
                    ['icon' => 'fa-box', 'alert' => 'Productos'],
                    ['icon' => 'fa-file-contract', 'alert' => 'Cotización'],
                    ['icon' => 'fa-truck', 'alert' => 'Proveedores'],
                    ['icon' => 'fa-clipboard-list', 'alert' => 'Pedidos']
                ];
                foreach ($items as $item): ?>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 flex flex-col items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas <?php echo $item['icon']; ?> text-4xl mb-2"></i>
                        <button class="btn" data-alert="<?php echo $item['alert']; ?>">
                            <span><?php echo $item['alert']; ?></span>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <script>
        const buttons = document.querySelectorAll('.btn');
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
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('flex-shrink-0');
            sidebar.classList.toggle('flex-shrink');
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