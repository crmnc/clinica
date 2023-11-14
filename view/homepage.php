<?php
    session_start();

    use controller\LoginController;

    require_once __DIR__ . '/../controller/LoginController.php';
    require_once __DIR__ . '/../database/Database.php';

    $loginController = new LoginController();

    if (isset($_GET['action'])) {
        switch ($_GET['action']){
            case 'logout':
                $loginController->logout();
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
    <title>Home</title>
</head>
<body>
<h1>Bem vindo <?php echo $_SESSION['nome'] ?></h1>

<h2>Informações: </h2>
    <?php if($_SESSION["tipo"] == 2){ ?>

        Endereço: <?php echo $_SESSION["endereco"]; ?>
        <br>
        Telefone: <?php echo $_SESSION["telefone"]; ?>
        <br>
        Email: <?php echo $_SESSION["email"]; ?>
        <br>

    <?php } ?>

<a href="?action=logout">logout</a>
</body>
</html>