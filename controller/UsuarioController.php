<?php
namespace controller;

use database\Database;

class UsuarioController {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function index() {
        $usuarios = $this->getAllUsuarios();
        include 'view/usuarios.php';
    }

    private function getAllUsuarios(): array
    {
        $conn = $this->db->getConnection();
        $query = "SELECT * FROM usuario";
        $result = $conn->query($query);

        $usuarios = [];
        while ($linha = $result->fetch_assoc()) {
            $usuarios[] = $linha;
        }

        return $usuarios;
    }
}