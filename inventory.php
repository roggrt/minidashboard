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

// Obtener los datos del inventario
$sql = "SELECT * FROM products";
$inventory_result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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
            <h1 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Inventario</h1>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Producto</th>
                            <th scope="col" class="px-6 py-3">Descripción</th>
                            <th scope="col" class="px-6 py-3">Precio</th>
                            <th scope="col" class="px-6 py-3">Existencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($inventory_result->num_rows > 0): ?>
                            <?php while ($row = $inventory_result->fetch_assoc()): ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?php echo $row['name']; ?>
                                    </th>
                                    <td class="px-6 py-4 text-gray-800 dark:text-white"><?php echo $row['description']; ?></td>
                                    <td class="px-6 py-4 text-gray-800 dark:text-white">$<?php echo $row['price']; ?></td>
                                    <td class="px-6 py-4 text-gray-800 dark:text-white"><?php echo $row['stock']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td colspan="4" class="px-6 py-4 text-gray-800 dark:text-white">No hay productos en el inventario.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        // Código JavaScript para interacciones adicionales
        const toggleDarkMode = document.getElementById('toggleDarkMode');
        toggleDarkMode.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDarkMode = document.documentElement.classList.contains('dark');
            toggleDarkMode.innerHTML = isDarkMode ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>