<?php

namespace AppCrm\interfaces;

use AppCrm\componentes\Log;
use AppCrm\componentes\Notificacao;

interface ICadastro
{
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}
