<?php

require __DIR__ . '/vendor/autoload.php';

use AppEtl\Leitor;

/* echo 'Funcionando'; */

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__ . '/arquivos');
$leitor->setArquivo('dados.csv');
// $leitor->lerArquivo();

echo '<pre>';
print_r($leitor->lerArquivo());
echo '<pre>';
