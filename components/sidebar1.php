<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de navegación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <aside id="sidebar" class="bg-gray-800 text-gray-100 w-5 flex flex-col justify-between flex-shrink-10 md:w-64 transition-all duration-300">
    <div class="md:space-x-1">
            <a href="dashboard.php" class="flex items-center justify-center h-16 bg-gray-900 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
                <i class="fas fa-home text-2xl md:mr-2"></i>
                <span class="hidden md:block">Dashboard</span>
            </a>
            <a href="#" id="blankLink" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
                <i class="fas fa-file-blank text-2xl md:mr-2"></i>
                <span class="hidden md:block">Inicio</span>
            </a>
            <div x-data="{ open: false }">
                <a href="#" @click="open = !open" class="flex items-center justify-start h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
                    <i class="fas fa-exchange-alt text-2xl md:mr-2 style="margin-right: 5px;"></i>
                    <span class="hidden md:block">Transacciones</span>
                    <i class="fas fa-chevron-down ml-auto md:hidden"></i>
                </a>
                <div x-show="open" class="md:block">
                    <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                        <i class="fas fa-newspaper text-xl md:mr-2"></i>
                        <span class="hidden md:block">Ventas</span>
                    </a>
                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                            <i class="fas fa-dollar-sign text-xl md:mr-2"></i>
                            <span class="hidden md:block">Caja de Efectivo</span>
                            <i class="fas fa-chevron-down ml-auto md:hidden"></i>
                        </a>
                        <div x-show="open" class="md:block">
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-cash-register text-xl md:mr-2"></i>
                                <span class="hidden md:block">Apertura de Caja</span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-cash-register text-xl md:mr-2"></i>
                                <span class="hidden md:block">Cierre de Caja</span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-16 hover:bg -gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-sync text-xl md:mr-2"></i>
                                <span class="hidden md:block">Movimiento de Caja</span>
                            </a>
                        </div>
                    </div>
                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                            <i class="fas fa-shopping-cart text-xl md:mr-2"></i>
                            <span class="hidden md:block">Compras</span>
                            <i class="fas fa-chevron-down ml-auto md:hidden"></i>
                        </a>
                        <div x-show="open" class="md:block">
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-file-invoice text-xl md:mr-2"></i>
                                <span class="hidden md:block">Pedido Proveedor</span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-truck text-xl md:mr-2"></i>
                                <span class="hidden md:block">Proveedores</span>
                            </a>
                        </div>
                    </div>
                    <div x-data="{ open: false }">
                        <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                            <i class="fas fa-tools text-xl md:mr-2"></i>
                            <span class="hidden md:block">Servicios Técnicos</span>
                            <i class="fas fa-chevron-down ml-auto md:hidden"></i>
                        </a>
                        <div x-show="open" class="md:block">
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-car text-xl md:mr-2"></i>
                                <span class="hidden md:block">Marca Vehículo</span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                                <i class="fas fa-car text-xl md:mr-2"></i>
                                <span class="hidden md:block">Modelo Vehículo</span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md: pl-16">
    <i class="fas fa-car text-xl md:mr-2"></i>
    <span class="hidden md:block">Colores Vehículo</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
    <i class="fas fa-user text-xl md:mr-2"></i>
    <span class="hidden md:block">Clientes</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
    <i class="fas fa-car text-xl md:mr-2"></i>
    <span class="hidden md:block">Vehículos</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
    <i class="fas fa-receipt text-xl md:mr-2"></i>
    <span class="hidden md:block">Ordenes de Servicio</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
    <i class="fas fa-boxes text-xl md:mr-2"></i>
    <span class="hidden md:block">Categorías</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
    <i class="fas fa-box text-xl md:mr-2"></i>
    <span class="hidden md:block">Sub Categorías</span>
</a>
</div>
</div>
<div x-data="{ open: false }">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-cash-register text-2xl md:mr-2"></i>
        <span class="hidden md:block">Caja Chica</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>
    <div x-show="open" class="md:block">
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-cash-register text-xl md:mr-2"></i>
            <span class="hidden md:block">Apertura</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-cash-register text-xl md:mr-2"></i>
            <span class="hidden md:block">Cierre</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-plus text-xl md:mr-2"></i>
            <span class="hidden md:block">Ingresos</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-sync text-xl md:mr-2"></i>
            <span class="hidden md:block">Movimientos</span>
        </a>
    </div>
</div>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
    <i class="fas fa-bicycle text-2xl md:mr-2"></i>
    <span class="hidden md:block">Control Entregas</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
    <i class="fas fa-paper-plane text-2xl md:mr-2"></i>
    <span class="hidden md:block">Comprobantes Electrónicos</span>
</a>
<div x-data="{ open: false }">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-file-clipboard text-2xl md:mr-2"></i>
        <span class="hidden md:block">Garantía</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>
    <div x-show="open" class="md:block">
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-clipboard text-xl md:mr-2"></i>
            <span class="hidden md:block">Productos en Garantía</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-clipboard text-xl md:mr-2"></i>
            <span class="hidden md:block">Devoluciones</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-clipboard text-xl md:mr-2"></i>
            <span class="hidden md:block">Cláusulas de Garantía</span>
        </a>
    </div>
</div>
<div x-data="{ open: false }">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-newspaper text-2xl md:mr-2"></i>
        <span class="hidden md:block">Cartera</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>
    <div x-show="open" class="md:block">
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-credit-card text-xl md:mr-2"></i>
            <span class="hidden md:block">Créditos</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-list text-xl md:mr-2"></i>
            <span class="hidden md:block">Listado Cartera</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md :justify-start md:pl-12">
    <i class="fas fa-credit-card text-xl md:mr-2"></i>
    <span class="hidden md:block">Cheques por Cobrar</span>
</a>
<a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
    <i class="fas fa-file-invoice text-xl md:mr-2"></i>
    <span class="hidden md:block">Reporte de Cobros</span>
</a>
</div>
</div>
</div>
<div x-data="{ open: false }">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-chart-bar text-2xl md:mr-2"></i>
        <span class="hidden md:block">Reportes</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>
    <div x-show="open" class="md:block">
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-chart-line text-xl md:mr-2"></i>
            <span class="hidden md:block">Productos más Vendidos</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-alt text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte de Utilidades</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-bar-chart text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte de ATS</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-bar-chart text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte de Retenciones</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-bar-chart text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte de Declaraciones</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-alt text-xl md:mr-2"></i>
            <span class="hidden md:block">Planos TXT</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-invoice text-xl md:mr-2"></i>
            <span class="hidden md:block">Cierre de Mes Venta</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-alt text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte Senae</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-file-alt text-xl md:mr-2"></i>
            <span class="hidden md:block">Reporte Landed cost</span>
        </a>
    </div>
</div>


    
    
    
    <div x-data="{ open: false}">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-calculator text-2xl md:mr-2"></i>
        <span class="hidden md:block">Contabilidad</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>






   <div x-show="open" class="md:block">
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-receipt text-xl md:mr-2"></i>
            <span class="hidden md:block">Registro de Asientos</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-window-restore text-xl md:mr-2"></i>
            <span class="hidden md:block">Plan de Cuentas</span>
        </a>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
            <i class="fas fa-calendar text-xl md:mr-2"></i>
            <span class="hidden md:block">Ejercicios Contables</span>
        </a>
        <div x-data="{ open: false }">
            <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                <i class="fas fa-university text-xl md:mr-2"></i>
                <span class="hidden md:block">Bancos</span>
                <i class="fas fa-chevron-down ml-auto md:hidden"></i>
            </a>
            <div x-show="open" class="md:block">
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-file-alt text-xl md:mr-2"></i>
                    <span class="hidden md:block">Conciliacion Bancaria</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-credit-card text-xl md:mr-2"></i>
                    <span class="hidden md:block">Cheques por Cobrar</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-dollar-sign text-xl md:mr-2"></i>
                    <span class="hidden md:block">Cheques por Pagar</span>
                </a>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div>
        <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
            <i class="fas fa-cog text-2xl md:mr-2"></i>
            <span class="hidden md:block">Configuración</span>
        </a>
    </div>
</aside>


        <!-- <div x-data="{ open: false }">
            <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                <i class="fas fa-chart-line text-xl md:mr-2"></i>
                <span class="hidden md:block">Reportes</span>
                <i class="fas fa-chevron-down ml-auto md:hidden"></i>
            </a>
            <div x-show="open" class="md:block">
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-book text-xl md:mr-2"></i>
                    <span class="hidden md:block">Libro Mayor</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-book text-xl md:mr-2"></i>
                    <span class="hidden md:block">Libro Diario</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-coins text-xl md:mr-2"></i>
                    <span class="hidden md:block">Balance de Sumas y Saldos</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-window-restore text-xl md:mr-2"></i>
                    <span class="hidden md:block">Balance de Situación</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-window-minimize text-xl md:mr-2"></i>
                    <span class="hidden md:block">Estados de Resultados</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-window-maximize text-xl md:mr-2"></i>
                    <span class="hidden md:block">Asientos Descuadrados</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-file-link text-xl md:mr-2"></i>
                    <span class="hidden md:block">Documentos sin Contabilizar</span>
                </a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                <i class="fas fa-cog text-xl md:mr-2"></i>
                <span class="hidden md:block">Categorías Contables</span>
                <i class="fas fa-chevron-down ml-auto md:hidden"></i>
            </a>
            <div x-show="open" class="md:block">
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-building text-xl md:mr-2"></i>
                    <span class="hidden md:block">Generales</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-belt text-xl md:mr-2"></i>
                    <span class="hidden md:block">Retenciones</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-box text-xl md:mr-2"></i>
                    <span class="hidden md:block">Compra/Venta</span>
                </a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                <i class="fas fa-cogs text-xl md:mr-2"></i>
                <span class="hidden md:block">Configuración Contables</span>
                <i class="fas fa-chevron-down ml-auto md:hidden"></i>
            </a>
            <div x-show="open" class="md:block">
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-calendar text-xl md:mr-2"></i>
                    <span class="hidden md:block">Tipo de Asientos</span>
                </a>
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-calendar text-xl md:mr-2"></i>
                    <span class="hidden md:block">Sucursales</span>
                </a>
            </div>
        </div>
    </div>
</div>
</body> -->


<!-- 

<div x-data="{ open: false }">
    <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-6">
        <i class="fas fa-wrench text-2xl md:mr-2"></i>
        <span class="hidden md:block">Mantenimientos</span>
        <i class="fas fa-chevron-down ml-auto md:hidden"></i>
    </a>
    <div x-show="open" class="md:block">
        <div x-data="{ open: false }">
            <a href="#" @click="open = !open" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-12">
                <i class="fas fa-network-wired text-xl md:mr-2"></i>
                <span class="hidden md:block">Estructura</span>
                <i class="fas fa-chevron-down ml-auto md:hidden"></i>
            </a> -->
            <!-- <div x-show="open" class="md:block">
                <a href="#" class="flex items-center justify-center h-16 hover:bg-gray-700 transition-colors duration-300 md:justify-start md:pl-16">
                    <i class="fas fa-home text-xl md:mr-2"></i>
                    <span class="hidden md:block  -->