<?php

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    require_once $classPath;
});

use controller\PacienteController;
use controller\UsuarioController;
use controller\LoginController;

$usuarioController = new UsuarioController();
$loginController = new LoginController();
$pacienteController = new PacienteController();

if (isset($_GET['action'])) {
    switch ($_GET['action']){
        case 'usuarioList':
            $usuarioController->index();
            break;
        case 'login':
            $loginController->index();
            break;
        case 'cadastrarPaciente':
            $pacienteController->index();
            break;
    }
    exit(); // Terminate further execution
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin pages</title>
</head>
<body>
<h2>admin pages</h2>
<a href="?action=usuarioList">Lista de usuários</a>
<br>
<a href="?action=login">Página de login</a>
<br>
<a href="?action=cadastrarPaciente">Cadastrar paciente</a>
</body>
</html>
