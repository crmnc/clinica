<?php
namespace model;
abstract class Usuario
{

    private string $login;
    private string $senha;
    private string $nome;

    /**
     * 1- Médico
     * 2- Paciente
     * 3- Recepcionista
     */
    private int $tipoUsuario;

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    function getNome($nome)
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

}