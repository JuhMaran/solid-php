<?php

namespace AppCrm\dao;

use AppCrm\BD;
use AppCrm\interfaces\ICadastro;
use AppCrm\interfaces\INotificacao;
use AppCrm\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao
{
    public function salvar()
    {
        // Lógica para salvar o contrato no banco de dados
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // Lógica para enviar uma notificação relacionada ao contrato
    }
}
