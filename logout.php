<?php
session_start();

// Destruir la sesión
session_unset();
session_destroy();

// Redirigir al archivo login.php
header("Location: login.php");
exit();
?>