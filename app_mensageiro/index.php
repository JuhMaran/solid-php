<?php

require __DIR__ . '/vendor/autoload.php';

use AppMensageiro\Mensageiro;

// ----- canal e-mail -----
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>'; // quebra de linha para facilitar a leitura

// ----- canal sms -----
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();

// echo 'Funcionando!';
