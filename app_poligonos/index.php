<?php

require __DIR__ . '/vendor/autoload.php';

use AppPoligonos\Quadrado;
use AppPoligonos\Retangulo;

$retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo '<h3>Área do Retângulo: ' . $retangulo->getArea() . ' </h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do Quadrado: ' . $quadrado->getArea() . ' </h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Área do Retângulo: ' . $retangulo->getArea() . '</h3>';
