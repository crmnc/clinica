<?php
include '../database/config.php';
include '../model/Usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? null;
    $email = $_POST["email"] ?? null;
    $password = $_POST["password"] ?? null;
    $name = $_POST["name"] ?? null;

    $query = "INSERT INTO Usuario (idUsuario, login, senha, nome) VALUES (null, '$username', '$password', '$name')";
    $conn->query($query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<h1>Create User</h1>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="password">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <input type="submit" value="Create User">
</form>
</body>
</html>
