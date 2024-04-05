<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TailAdmin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .fas {
            font-weight: 900;
            margin-right: 5px;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-gray-800 border-b border-gray-700 fixed top-0 w-full z-30">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="false" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded">
                        <span class="sr-only">Abrir sidebar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="5" width="16" height="2" />
                            <rect x="4" y="11" width="16" height="2" />
                            <rect x="4" y="17" width="16" height="2" />
                        </svg>
                    </button>
                    <a class="text-xl font-bold flex items-center lg:ml-2.5" href="#">
                        <img class="h-6 mr-2" src="https://tailadmin.com/logo.svg" alt="TailAdmin Logo">
                        <span class="self-center whitespace-nowrap">TailAdmin</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-400 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded mr-2">
                        <span class="sr-only">Buscar</span>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.8 22.8l-.6.6c-.4.4-.9.6-1.4.6h-.6c-.5 0-.9-.2-1.3-.6l-5.5-5.5c-.6-.6-.6-1.5-.1-2.1l.6-.6c.4-.4.9-.6 1.4-.6h.6c.5 0 .9.2 1.3.6l5.5 5.5c.4.4.6.9.6 1.4v.6c0 .5-.2 1-.6 1.4zm-6.2-10.7c-1.6-1.6-3.7-2.5-5.9-2.5-2.2 0-4.3.9-5.9 2.5-1.6 1.6-2.5 3.7-2.5 5.9 0 2.2.9 4.3 2.5 5.9 1.6 1.6 3.7 2.5 5.9 2.5 2.2 0 4.3-.9 5.9-2.5 1.6-1.6 2.5-3.7 2.5-5.9 0-2.2-.9-4.3-2.5-5.9z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex overflow-hidden bg-white pt-16">
        <?php require_once 'sidebar.php'; ?>

        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <div class="grid grid-cols-3 gap-6 xl:grid-cols-3">
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold">
                                    Ingresos
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-center mt-6">
                                <div class="text-6xl font-semibold">
                                    $89,094
                                </div>
                                <div class="flex items-center">
                                    <div class="text-sm font-semibold text-green-600">
                                        +10%
                                    </div>
                                    <div class="pl-2">
                                        <i class="fas fa-arrow-up text-green-600"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full mt-3">
                                <div class="w-2/3 h-full text-center text-xs text-white bg-green-400 rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold">
                                    Gastos
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-center mt-6">
                                <div class="text-6xl font-semibold">
                                    $57,083
                                </div>
                                <div class="flex items-center">
                                    <div class="text-sm font-semibold text-red-600">
                                        -2.5%
                                    </div>
                                    <div class="pl-2">
                                        <i class="fas fa-arrow-down text-red-600"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full mt-3">
                                <div class="w-2/3 h-full text-center text-xs text-white bg-red-400 rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Resto del contenido del dashboard -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold">
                                    Usuarios Nuevos
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-center mt-6">
                                <div class="text-6xl font-semibold">
                                    3,594
                                </div>
                                <div class="flex items-center">
                                    <div class="text-sm font-semibold text-green-600">
                                        +25%
                                    </div>
                                    <div class="pl-2">
                                        <i class="fas fa-arrow-up text-green-600"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-3 bg-gray-200 rounded-full mt-3">
                                <div class="w-2/3 h-full text-center text-xs text-white bg-green-400 rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <div class="card">
                    <div class="card-header flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold">
                            Estadísticas de Ventas
                        </div>
                        <div class="text-sm text-gray-600">
                            <div class="flex items-center">
                                <div class="flex items-center mr-4">
                                    <span class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold mr-2">
                                        Mes:
                                    </span>
                                    <select class="form-select form-select-sm">
                                        <option>Marzo 2023</option>
                                        <option>Abril 2023</option>
                                    </select>
                                </div>
                                <div class="flex items-center">
                                    <span class="h6 text-indigo-700 faux-crush-left faux-crush-sm text-sm font-semibold mr-2">
                                        Ver:
                                    </span>
                                    <div class="flex items-center ml-2">
                                        <div>
                                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Día
                                            </button>
                                        </div>
                                        <div class="ml-2">
                                            <button class="bg-indigo-700 hover:bg-indigo-800 text-white font-semibold py-2 px-4 border border-indigo-700 rounded shadow">
                                                Mes
                                            </button>
                                        </div>
                                        <div class="ml-2">
                                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Año
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Aquí iría el gráfico de ventas -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return 'dark'
                }
                return 'light'
            }

            const setTheme = (theme) => {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark')
                } else {
                    document.documentElement.classList.remove('dark')
                }
                window.localStorage.setItem('dark', theme === 'dark')
            }

            const getButton = (theme) => {
                const toggle = document.getElementById('toggle')

                toggle.innerText = `${theme === 'dark' ? 'Light' : 'Dark'} mode`
                if (theme === 'dark') {
                    toggle.classList.add('bg-indigo-600')
                    toggle.classList.remove('bg-gray-200')
                } else {
                    toggle.classList.add('bg-gray-200')
                    toggle.classList.remove('bg-indigo-600')
                }
            }

            const showToggleButton = () => {
                getButton(getTheme())
            }

            const toggleTheme = () => {
                const theme = getTheme()
                const newTheme = theme === 'dark' ? 'light' : 'dark'
                setTheme(newTheme)
                getButton(newTheme)
            }

            const sidebarButton = document.getElementById('toggleSidebarMobile')
            const sidebarButtonSearch = document.getElementById('toggleSidebarMobileSearch')
            const sidebarItems = document.querySelectorAll('#sidebar .sidebar-item')

            sidebarButton.addEventListener('click', () => {
                document.getElementById('sidebar').classList.toggle('-translate-x-full')
                document.getElementById('content').classList.toggle('ml-0')
            })

            sidebarButtonSearch.addEventListener('click', () => {
                document.getElementById('searchInput').classList.toggle('translate-x-full')
            })

            sidebarItems.forEach((sidebarItem) => {
                sidebarItem.addEventListener('click', () => {
                    window.location.href = sidebarItem.querySelector('a').href
                })
            })

            showToggleButton()
        }

        window.addEventListener('load', setup)
    </script>
</body>
</html>