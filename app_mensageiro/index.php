<?php

require __DIR__ . '/vendor/autoload.php';

use AppMensageiro\Mensageiro;
use AppMensageiro\Email;
use AppMensageiro\Sms;
use AppMensageiro\WhatsApp;

// ----- canal e-mail -----
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>'; // quebra de linha para facilitar a leitura

// ----- canal sms -----
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '<br>';

// ----- canal WhatsApp -----
$msg3 = new Mensageiro(new WhatsApp());
$msg3->enviarToken();


/* // ----- canal e-mail -----
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>'; // quebra de linha para facilitar a leitura

// ----- canal sms -----
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
 */
// echo 'Funcionando!';
