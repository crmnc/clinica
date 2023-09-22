<?php

class Prontuario
{
    private Paciente $paciente;
    private string $historico;

    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function getPaciente(): Paciente
    {
        return $this->paciente;
    }
}