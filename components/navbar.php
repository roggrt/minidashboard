<!-- components/navbar.php -->
<nav class="bg-white dark:bg-gray-800 shadow-md flex items-center justify-between flex-wrap p-4 md:p-6">
    <div class="flex items-center flex-shrink-0 text-gray-800 dark:text-white mr-6">
        <button id="toggleSidebar" class="mr-4 focus:outline-none">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <span class="font-semibold text-xl tracking-tight">JOAO Dashboard</span>
    </div>

    <div class="w-full block flex-grow md:flex md:items-center md:w-auto">
        <div class="text-sm md:flex-grow">
            <!-- Agregar elementos de navegación adicionales -->
        </div>

        <div class="flex items-center">
            <div class="relative mr-4">
                <button id="showNotifications" class="text-gray-800 dark:text-white hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none">
                    <i class="fas fa-bell"></i>
                </button>
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">2</span>
                <div id="notificationsMenu" class="absolute right-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg hidden">
                    <div class="py-2 px-4 text-gray-700 dark:text-gray-200">Notificaciones</div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Notificación 1</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Notificación 2</a>
                </div>
            </div>

            <div class="relative mr-4">
                <button id="userDropdown" class="text-gray-800 dark:text-white hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none">
                    <i class="fas fa-user"></i>
                </button>
                <div id="userMenu" class="absolute right-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg hidden">
                    <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Cerrar sesión</a>
                </div>
            </div>

            <button id="toggleDarkMode" class="text-gray-800 dark:text-white hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none">
                <i class="fas fa-sun"></i>
            </button>
        </div>
    </div>
</nav>