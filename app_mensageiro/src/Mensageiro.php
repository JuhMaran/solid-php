<?php

namespace AppMensageiro;

use AppMensageiro\Email;

class Mensageiro
{
    private $canal;

    public function getCanal(): string
    {
        return $this->canal;
    }

    public function setCanal(string $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        // $obj = new Email();
        // $obj->enviar();

        $classe = 'AppMensageiro\\' . ucfirst($this->canal);
        echo $classe; // acompanhar o nome da classe que está sendo instanciada
        echo '<br>'; // quebra de linha para facilitar a leitura
        $obj = new $classe();
        $obj->enviar();
    }
}
