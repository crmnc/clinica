<?php

class Consulta
{
    private DateTime $data;
    private Medico $medico;
    private Paciente $paciente;

    /**
     * 1 - Agendado
     * 2 - Aguardando atendimento
     * 3 - Atrasado/não atendido (reagendar)
     * 4 - Concluído
     */
    private int $status;

    public function __construct(Medico $medico, Paciente $paciente)
    {
        $this->medico = $medico;
        $this->paciente = $paciente;
    }

    /**
     * @todo Implementar lógica de verificar disponibilidade
     * @param DateTime $data
     * @param Medico $medico
     * @return bool
     */
    public function verificarDisponibilidade(DateTime $data, Medico $medico): bool
    {
        return true;
    }
}