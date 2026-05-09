<?php

require __DIR__ . '/vendor/autoload.php';

use AppPoligonos\Poligono;
use AppPoligonos\poligonos\Quadrado;
use AppPoligonos\poligonos\Retangulo;

// forma geometrica
$poligono = new Poligono();
// recuperar a instância do objeto e 'setar' a forma geometrica
$poligono->setForma(new Retangulo());
// recuperar a instância do objeto, utilizando o getForma()
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
// para testar
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Retângulo: ' . $poligono->getArea() . ' </h3>';

// forma geometrica
$poligono = new Poligono();
// recuperar a instância do objeto e 'setar' a forma geometrica
$poligono->setForma(new Quadrado());
// recuperar a instância do objeto, utilizando o getForma()
// $poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
// para testar
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Quadrado: ' . $poligono->getArea() . ' </h3>';

/* $retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo '<h3>Área do Retângulo: ' . $retangulo->getArea() . ' </h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do Quadrado: ' . $quadrado->getArea() . ' </h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Área do Retângulo: ' . $retangulo->getArea() . '</h3>'; */
