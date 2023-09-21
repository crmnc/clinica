<?php
/**
 * Login
 * @todo
 * Receber as informações digitadas
 * Buscar no banco de dados o usuário
 * Se os dados estão corretos, instanciar o objeto do tipo correspondente
 *
 * Esse método:
 * 1- Recebe por parâmetro o login e senha digitados pelo usuario
 * 2- Verifica se a senha corresponde
 * @return Usuario|null
 */
function efetuarLogin(string $login, string $senha, int $tipoUsuario): ?Usuario
{
    //TODO: validar login e senha
    switch ($tipoUsuario){
        case 1:
            return new Medico();
        case 2:
            return new Paciente();
        case 3:
            return new Recepcionista();
        default:
            return NULL;
    }
}

/**
 * Agendamento
 * @todo Fluxo de agendamento.
 * Assim que o usuário for criado, pode usar o mesmo objeto para agendar a consulta.
 */
$usuario = new Paciente("usr1");
$usuario->agendarConsulta(new DateTime(), new Medico());