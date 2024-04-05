<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<body class="bg-gray-100 dark:bg-gray-900 flex">
    <?php
    // Iconos de ejemplo
    $icons = [
        'fa-house', 'fa-chart-line', 'fa-users', 'fa-cog', 'fa-calendar', 'fa-file',
        'fa-shopping-cart', 'fa-envelope', 'fa-lock', 'fa-user-plus', 'fa-database',
        'fa-server', 'fa-code', 'fa-bomb', 'fa-hashtag', 'fa-bolt', 'fa-sitemap',
        'fa-paint-brush', 'fa-rocket', 'fa-bell'
    ];
    ?>

    <!-- Barra lateral -->
    <aside class="bg-gray-800 text-gray-100 w-64 flex-shrink-0">
        <div class="p-4">
            <h1 class="text-xl font-bold">Mi Dashboard</h1>
        </div>
        <nav>
            <ul>
                <li class="p-2 hover:bg-gray-700">
                    <a href="#" class="flex items-center">
                        <i class="fas fa-tachometer-alt mr-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- Agregar más elementos de navegación según sea necesario -->
            </ul>
        </nav>
    </aside>

    <!-- Contenido principal -->
    <main class="flex-grow p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <?php foreach ($icons as $icon): ?>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 flex flex-col items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                    <i class="fas <?php echo $icon; ?> text-4xl mb-2"></i>
                    <button class="btn">
                        <span>Botón</span>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                showAlert();
            });
        });

        function showAlert() {
            const isDarkMode = document.documentElement.classList.contains('dark');
            const bgColor = isDarkMode ? 'bg-gray-800' : 'bg-white';
            const textColor = isDarkMode ? 'text-white' : 'text-gray-800';

            const alert = document.createElement('div');
            alert.classList.add('fixed', 'bottom-4', 'left-4', 'p-4', 'rounded-lg', 'shadow-md', bgColor, textColor);
            alert.innerHTML = '<p>¡Esta es una alerta de ejemplo!</p>';

            document.body.appendChild(alert);

            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    </script>
</body>
</html>