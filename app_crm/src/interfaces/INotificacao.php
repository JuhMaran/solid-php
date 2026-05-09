<?php

namespace AppCrm\interfaces;

use AppCrm\componentes\Notificacao;

interface INotificacao
{
    public function enviarNotificacao(Notificacao $notificacao);
}
