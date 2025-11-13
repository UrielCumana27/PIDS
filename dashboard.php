<?php
session_start();

// Verifica si el usuario inició sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Cerrar sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - PIDS</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Esta es la zona protegida de la plataforma.</p>
    <a href="?logout=true">Cerrar sesión</a>
</body>
</html>