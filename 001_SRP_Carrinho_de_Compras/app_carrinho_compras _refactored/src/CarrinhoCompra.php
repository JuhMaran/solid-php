<?php

namespace AppCarrinhoCompras;

use AppCarrinhoCompras\Item;

class CarrinhoCompra
{

    // atributos
    private $itens;

    // construtor
    public function __construct()
    {
        $this->itens = [];
    }

    // Recuperar os itens do carrinho
    public function getItens()
    {
        return $this->itens;
    }

    // Adicionar um item ao carrinho
    public function adicionarItem(Item $item)
    {
        array_push($this->itens, $item);
        return true;
    }

    // Validar o carrinho de compras
    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}
