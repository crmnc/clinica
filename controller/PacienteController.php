<?php

namespace controller;

use database\Database;

class PacienteController
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function index(): void
    {
        header("Location: /clinica/view/cadastrarPaciente.php");
    }

    public function cadastrarPaciente($paciente): void
    {

    }

}