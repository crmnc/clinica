<?php

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    require_once $classPath;
});

use controller\UsuarioController;
use controller\LoginController;

$usuarioController = new UsuarioController();
$loginController = new LoginController();

if (isset($_GET['action'])) {
    switch ($_GET['action']){
        case 'usuarioList':
            $usuarioController->index();
            break;
        case 'login':
            $loginController->index();
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
<a href="?action=usuarioList">Clique aqui para ir ao usuarioList</a>
<a href="?action=login">Clique aqui para ir ao login</a>
</body>
</html>
