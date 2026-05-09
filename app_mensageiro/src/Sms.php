<?php

namespace AppMensageiro;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'SMS: Seu token é 888-333';
    }
}
