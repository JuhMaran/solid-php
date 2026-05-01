<?php

require __DIR__ . '/vendor/autoload.php';

use AppCarrinhoCompras\CarrinhoCompra;
use AppCarrinhoCompras\EmailService;
use AppCarrinhoCompras\Item;
use AppCarrinhoCompras\Pedido;

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();

// Criar itens para o pedido
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta Copos');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);

// Exibir o pedido inicialmente, sem itens
echo '<h4>Pedido Iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

// Adicionar itens ao carrinho de compras do pedido
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

// Exibir o pedido após adicionar os itens
echo '<h4>Pedido Com Itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

// Exibir informações de Itens
echo '<h4>Itens do Carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

// Calcular o valor total do pedido
echo '<h4>Valor do Total Pedido</h4>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;

// Validação do carrinho 
echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

// Status do Pedido
echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

// Confirmar o pedido
echo '<h4>Confirmar Pedido</h4>';
echo $pedido->confirmar();

// E-mail de confirmação
echo '<h4>E-mail</h4>';
if ($pedido->getStatus() == 'confirmado') {
    // ação
    echo EmailService::dispararEmail();
}
