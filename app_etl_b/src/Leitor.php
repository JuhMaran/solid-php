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
        $extensao = explode('.', $this->getArquivo());

        $classe = 'AppEtl\extrator\\' . ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                // deve conter a relação de parâmetros que serão passados para o método lerArquivo()
                // esse método espera receber uma string como caminho
                $caminho
            ]
        );
    }
}
