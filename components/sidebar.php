
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
  </head>
  <body class="bg-blue-600">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <aside
      id="sidebar"
      class="bg-gray-800 text-gray-100 w-16 flex flex-col justify-between flex-shrink-0 md:w-64 md:flex md:flex-shrink-0 transition-all duration-300"
    >
      <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-\[300px\] overflow-y-auto text-center bg-gray-900"
      >
        <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center">
            <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
            <h1 class="font-bold text-gray-200 text-\[15px\] ml-3">
              TailwindCSS
            </h1>
            <i
              class="bi bi-x cursor-pointer ml-28 lg:hidden"
              onclick="openSidebar()"
            ></i>
          </div>
          <div class="my-2 bg-gray-600 h-\[1px\]"></div>
        </div>
        <div
          class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
        >
          <i class="bi bi-search text-sm"></i>
          <input
            type="text"
            placeholder="Search"
            class="text-\[15px\] ml-4 w-full bg-transparent focus:outline-none"
          />
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-bar-chart"></i>
          <span class="text-\[15px\] ml-4 text-gray-200 font-bold">Dashboard</span>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-house-door-fill"></i>
          <span class="text-\[15px\] ml-4 text-gray-200 font-bold">Inicio</span>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown('transacciones')"
        >
          <i class="bi bi-cash-stack"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
              Transacciones
            </span>
            <span class="text-sm rotate-180" id="arrow-transacciones">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
          id="submenu-transacciones"
        >
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-cart-fill mr-2"></i>Ventas
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-cash-coin mr-2"></i>Caja de Efectivo
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-cart-check-fill mr-2"></i>Compras
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-tools mr-2"></i>Servicios Técnicos
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-wallet-fill mr-2"></i>Caja Chica
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-truck mr-2"></i>Control Entregas
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-receipt-cutoff mr-2"></i>Comprobantes Electrónicos
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-clipboard2-check-fill mr-2"></i>Garantía
          </h1>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown('inventario')"
        >
          <i class="bi bi-box-seam"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
              Inventario
            </span>
            <span class="text-sm rotate-180" id="arrow-inventario">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
          id="submenu-inventario"
        >
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-building mr-2"></i>Almacenes
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-bag-fill mr-2"></i>Productos
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-trophy mr-2"></i>Certificados
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-globe mr-2"></i>País
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-bicycle mr-2"></i>Cilindraje
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-calendar-week mr-2"></i>Años
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-rulers mr-2"></i>Unidades Medidas
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-cash-stack mr-2"></i>Precios Ajuste
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-clipboard-data mr-2"></i>Kardex
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-arrow-repeat mr-2"></i>Movimientos
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-box-seam mr-2"></i>Existencia
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-bookshelf mr-2"></i>Auxiliar Inventario
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-credit-card-2-front mr-2"></i>Control de Serie
          </h1>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown('reportes')"
        >
          <i class="bi bi-bar-chart-line"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
              Reportes
            </span>
            <span class="text-sm rotate-180" id="arrow-reportes">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
          id="submenu-reportes"
        >
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-graph-up mr-2"></i>Productos más Vendidos
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-bar-chart-line mr-2"></i>Reporte de Utilidades
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-receipt-cutoff mr-2"></i>Reporte de ATS
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-cash-coin mr-2"></i>Reporte de Cobros
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-calendar-month mr-2"></i>Cierre de Mes Venta
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-airplane-engines mr-2"></i>Reporte Senae
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-airplane mr-2"></i>Reporte Landed cost
          </h1>
        </div>
        <!-- <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-calculator"></i>
          <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
            Contabilidad
          </span>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-gear"></i>
          <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
            Mantenimiento
          </span>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown('configuracion')"
        >
          <i class="bi bi-gear-wide-connected"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-\[15px\] ml-4 text-gray-200 font-bold">
              Configuración
            </span>
            <span class="text-sm rotate-180" id="arrow-configuracion">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden"
          id="submenu-configuracion"
        >
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-person-workspace mr-2"></i>Cambio de Clave
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-people-fill mr-2"></i>Usuarios
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-file-earmark-text mr-2"></i>Auditoria Usuarios
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-grid-3x3-gap mr-2"></i>Menus del Sistema
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-printer mr-2"></i>Impresoras
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-sliders2 mr-2"></i>Parámetros Generales
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            <i class="bi bi-envelope-fill mr-2"></i>Correo
          </h1>
        </div -->






<!-- 
        fin -->

        <script type="text/javascript">
      function dropdown(menu) {
        document.querySelector(`#submenu-${menu}`).classList.toggle("hidden");
        document.querySelector(`#arrow-${menu}`).classList.toggle("rotate-0");
      }
      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>
  </aside>
</body>
</html>

