<?php

namespace AppCarrinhoCompras;

use AppCarrinhoCompras\CarrinhoCompra;

class Pedido
{

    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    // Recuperar atributo CarrinhoCompra
    public function getCarrinhoCompra()
    {
        return $this->carrinhoCompra;
    }

    // Recuperar o status do pedido
    public function getStatus()
    {
        return $this->status;
    }
    // Modificação do atributo status do pedido
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    // Confirmação do pedido
    public function confirmar()
    {
        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }
}
