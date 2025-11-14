<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pids_db"; // O el nombre que de verdad tenga tu base

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
