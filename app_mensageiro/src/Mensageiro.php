<?php

namespace AppMensageiro;

use AppMensageiro\IMensagemToken;

class Mensageiro
{
    private $canal;

    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        // $obj = new Email();
        // $obj->enviar();

        $this->getCanal()->enviar(); // o método enviar() é chamado a partir do objeto $canal, que é uma instância de uma classe que implementa a interface IMensagemToken. Isso permite que o código seja flexível e possa trabalhar com diferentes tipos de canais de mensagem sem precisar modificar a classe Mensageiro.

        /*         $classe = 'AppMensageiro\\' . ucfirst($this->canal);
        echo $classe; // acompanhar o nome da classe que está sendo instanciada
        echo '<br>'; // quebra de linha para facilitar a leitura
        $obj = new $classe(); // implementações = instâncias
        $obj->enviar(); */
    }
}
