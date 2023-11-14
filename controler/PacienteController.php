<?php
include '../database/config.php';

require '../model/Paciente.php';



function cadastrarPaciente(string $login, string $senha, int $tipoUsuario): ?Usuario
{
    //TODO: validar login e senha

    switch ($tipoUsuario)
    {
        case 1:
            return new Medico();
        case 2:
            return new Paciente();
        case 3:
            return new Recepcionista();
        default:
            return NULL;
    }

    $query = "INSERT INTO Usuario (idUsuario, login, senha, nome) VALUES (null, '$username', '$password', '$name')";
    $conn->query($query);
}