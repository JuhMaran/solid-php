<?php

namespace AppEtl\extrator;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        // lógica para fazer a leitura do arquivo XLSX

        return $this->getDados();
    }
}
