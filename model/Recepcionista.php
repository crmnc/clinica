<?php

class Recepcionista extends Usuario
{
    private int $expediente;
    private int $ramal;

    /**
     * @todo Implementar lógica de agendamento de consulta
     * @param DateTime $data
     * @param Medico $medico
     * @param Paciente $paciente
     * @return Consulta
     */
    public function agendarConsulta(Paciente $paciente, DateTime $data, Medico $medico): ?Consulta
    {
        $consulta = new Consulta($paciente, $data, $medico);
        $this->consultas[] = $consulta;
        return $consulta;
    }

    /**
     * @todo Implementar lógica de buscar consultas passando o paciente
     * @param Paciente $paciente
     * @param DateTime $data
     * @return array|null
     */
    public function buscarConsultasPorPaciente(DateTime $data, Paciente $paciente): ?array
    {
        //TODO: buscar consultas do banco
        return null;
    }

    /**
     * @todo Implementar lógica de buscar consultas por data
     * @param DateTime $data
     * @return array|null
     */

    public function buscarConsultasPorData(DateTime $data): ?array
    {
        //TODO: buscar consultas do banco
        return null;
    }

    /**
     * @todo Implementar lógica de cadastrar paciente
     * @param Paciente $paciente
     * @return bool
     */
    public function cadastrarPaciente(Paciente $paciente) : bool
    {
        return true;
    }

}