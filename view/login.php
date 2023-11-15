<?php
    use controller\LoginController;

    require_once __DIR__ . '/../controller/LoginController.php';
    require_once __DIR__ . '/../database/Database.php';

    $loginController = new LoginController();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"] ?? null;
        $senha = $_POST["senha"] ?? null;
        $tipoUsuario = $_POST["tipo"] ?? null;

        $loginController->login($login, $senha, $tipoUsuario);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form method="post" action="">
    <label for="login">login:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="senha">senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <label for="Tipo de usuário">Tipo de usuário:</label>
    <select name="tipo" id="tipo">
        <option value="1">Médico</option>
        <option value="2">Paciente</option>
        <option value="3">Recepcionista</option>
    </select>

    <input type="submit" value="Logar">
</form>
</body>
</html>