<?php
$host = "localhost";
$db = "pids_db";
$user = "root"; // usuario por defecto en XAMPP
$pass = "";     // contraseña por defecto en XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>