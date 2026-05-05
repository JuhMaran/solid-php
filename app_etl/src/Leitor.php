<?php

namespace AppEtl;

class Leitor
{

    private $diretorio;
    private $arquivo;

    // getters e setters
    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        echo $caminho;

        $arquivo = new Arquivo();
        $arquivo->lerArquivoCSV($caminho);

        return $arquivo->getDados();
    }
}
