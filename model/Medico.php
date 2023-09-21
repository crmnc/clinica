<?php

class Medico extends Usuario
{
    private int $crm;
    private string $especialidade;

    private $consultas;

    public function __construct() {
        $this->consultas = array();
    }


    public function getCrm(): int
    {
        return $this->crm;
    }

    public function setCrm(int $crm): void
    {
        $this->crm = $crm;
    }

    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @param Paciente $paciente
     * @return Prontuario
     */
    public function acessarProntuario(Paciente $paciente) :Prontuario
    {
        //TODO: implementar lógica de buscar o prontuário por paciente
        $prontuario = new Prontuario($paciente);
        if($prontuario->getPaciente()->getLogin() == $paciente->getLogin()){
            //TODO: Implementar validações
        }
        return $prontuario;
    }

    /**
     * @param Prontuario $prontuario
     * @return Prontuario|null
     */
    public function atualizarProntuario(Prontuario $prontuario) : ?Prontuario
    {
        //TODO: Fazer o update do novo prontuario
        return null;
    }


    /**
     * @param int $status
     * @param DateTime $data
     * @return array|null
     */
    public function listarConsultas(int $status, DateTime $data) : ?array
    {
        //TODO: Implementar busca no banco de dados
        return array();
    }
}