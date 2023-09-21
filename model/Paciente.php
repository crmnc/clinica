<?php

class Paciente extends Usuario
{
    private string $endereco;
    private DateTime $dataNascimento;
    private int $telefone;
    private string $email;
    private $consultas;

    public function __construct() {
        $this->consultas = array();
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getTelefone(): int
    {
        return $this->telefone;
    }

    public function setTelefone(int $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @todo Implementar lógica de agendamento de consulta
     * @param DateTime $data
     * @param Medico $medico
     * @return Consulta
     */
    public function agendarConsulta(DateTime $data, Medico $medico): ?Consulta
    {
        $consulta = new Consulta($data, $medico);
        $this->consultas[] = $consulta;
        return $consulta;
    }

    /**
     * @todo Implementar lógica de buscar consultas.
     * @return array|null
     */
    public function buscarConsultas(): ?array
    {
        return $this->consultas;
    }
}