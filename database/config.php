<?php
$host = "127.0.0.1";
$port = "3306";
$username = "root";
$password = "";
$database = "clinica";

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
