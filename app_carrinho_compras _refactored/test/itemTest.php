<?php

use PHPUnit\Framework\TestCase;
use AppCarrinhoCompras\Item;

class ItemTest extends TestCase
{

    /*     public function testEstouFuncionando()
    {
        $valor = 10;
        $this->assertEquals($valor, 11);
    } */

    public function testEstadoInicialItem()
    {
        $item = new Item();

        $item->getDescricao() == '';
        $item->getValor() == 0;

        // asserções do PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGeteSetDescricao()
    {
        $descricao = 'Cadeira de plástico';
        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testGeteSetValor()
    {
        $valor = '35.42';

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido()
    {
        $item = new Item();

        // seria submeter um item válido para o teste e retornar ok
        $item->setValor(55);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(true, $item->itemValido());

        // seria submeter um item inválido para o teste e retornar false (descrição)
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        // seria submeter um item inválido para o teste e retornar false (valor)
        $item->setValor(0);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(false, $item->itemValido());

        // deve retornar false para um item valor e descrição inválidos
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }
}
