<?php

namespace AppCarrinhoCompras;

class Item
{

    private $descricao;
    private $valor;

    // Construtor
    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    // Getters e Setters
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}
