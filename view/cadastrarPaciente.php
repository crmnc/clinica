<?php
    use controller\PacienteController;
    use model\Paciente;

    require_once __DIR__ . '/../controller/PacienteController.php';
    require_once __DIR__ . '/../database/Database.php';
    require_once __DIR__ . '/../model/Paciente.php';
    require_once __DIR__ . '/../model/Usuario.php';

    $pacienteController = new PacienteController();

    $paciente = new Paciente();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paciente->setEndereco($_POST["endereco"] ?? null);
        $paciente->setDataNascimento($_POST["dataNascimento"] ?? null);
        $paciente->setTelefone($_POST["telefone"] ?? null);
        $paciente->setEmail($_POST["email"] ?? null);
        $paciente->setLogin($_POST["login"] ?? null);
        $paciente->setSenha($_POST["senha"] ?? null);

        $pacienteController->cadastrarPaciente($paciente);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar paciente</title>
</head>
<body>
<h1>Cadastrar paciente</h1>
<form method="post" action="">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br>

    <label for="dataNascimento">Data de nascimento:</label>
    <input type="date" id="dataNascimento" name="dataNascimento" required><br>

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br>

    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
