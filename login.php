<?php
session_start();
require_once "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    // Preparar la consulta para evitar SQL injection
    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if (hash('sha256', $password) === $hashed_password) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $id;
        header("Location: editar.php");
        exit();
    } else {
        header("Location: admin.php?error=" . urlencode("Usuario o contraseña incorrectos."));
        exit();
    }
    } else {
    header("Location: admin.php?error=" . urlencode("Usuario o contraseña incorrectos."));
    exit();
    }

    $stmt->close();
}
$conn->close();
?>