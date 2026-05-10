<?php

namespace AppMensageiro;

class WhatsApp implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'WhatsApp: Seu token é 888-333';
    }
}
