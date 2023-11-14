<?php
namespace controller;

use database\Database;
use model\Paciente;
use model\Medico;
use model\Recepcionista;

class LoginController
{
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function index(): void
    {
        header("Location: /clinica/view/login.php");
    }

    public function login($login, $senha, $tipoUsuario): void
    {
        $conn = $this->db->getConnection();
        $query = "SELECT * FROM usuario u WHERE u.login = ? AND u.senha = ? AND u.tipoUsuario = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssd", $login, $senha, $tipoUsuario);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user was found
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            session_start();
            $_SESSION["id"] = $user["idUsuario"];
            $_SESSION["nome"] = $user["nome"];
            $_SESSION["tipo"] = $tipoUsuario;

            $this->buscarInformacoesPorTipo($user["idUsuario"], $tipoUsuario);
            header("Location: /clinica/view/homepage.php");

        } else {
            echo "login inválido";
        }

        $stmt->close();
    }

    public function logout(): void
    {
        session_destroy();
        header("Location: /clinica/view/login.php");
    }

    private function buscarInformacoesPorTipo($idUsuario, $tipoUsuario): void
    {
        switch ($tipoUsuario)
        {
            case 1:
//                $query = "SELECT * FROM medico p WHERE p.usuario_idUsuario = ?";
                $result = $this->fetchInformation($query, $idUsuario);
                if ($result->num_rows > 0) {
                    //TODO implementar busca de informações dos médicos
                } else {
                    echo "login inválido";
                }
            case 2:
                $query = "SELECT * FROM paciente p WHERE p.usuario_idUsuario = ?";
                $result = $this->fetchInformation($query, $idUsuario);

                if ($result->num_rows > 0) {

                    $user = $result->fetch_assoc();

                    $_SESSION["endereco"] = $user["endereco"];
                    $_SESSION["telefone"] = $user["telefone"];
                    $_SESSION["email"] = $user["email"];

                } else {
                    echo "nenhuma informação encontrada";
                }
            case 3:
//                $query = "SELECT * FROM recepcionista p WHERE p.usuario_idUsuario = ?";
                $result = $this->fetchInformation($query, $idUsuario);
                if ($result->num_rows > 0) {
                    //TODO implementar busca de informações das recepcionistas
                } else {
                    echo "login inválido";
                }
        }
    }

    private function fetchInformation($query, $idUsuario){
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare($query);
        $stmt->bind_param("d", $idUsuario);
        $stmt->execute();
        return $stmt->get_result();
    }

}