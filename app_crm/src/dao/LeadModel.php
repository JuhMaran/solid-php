<?php

namespace AppCrm\dao;

use AppCrm\BD;
use AppCrm\interfaces\ICadastro;
use AppCrm\componentes\Log;
use AppCrm\componentes\Notificacao;

class LeadModel extends BD implements ICadastro
{
    public function salvar()
    {
        // Lógica para salvar o contrato no banco de dados
    }

    public function registrarLog(Log $log)
    {
        // Lógica para registrar o log do contrato
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // Lógica para enviar uma notificação relacionada ao contrato
    }
}
