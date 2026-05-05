<?php

namespace AppEtl;

class Arquivo
{

    private $dados = array();

    public function setDados(string $nome, string $sobrenome, string $email): void
    {
        array_push($this->dados, [
            'nome' => iconv('iso-8859-1', 'utf-8', $nome),
            'sobrenome' => $sobrenome,
            'email' => $email
        ]);
    }

    public function getDados(): array
    {
        return $this->dados;
    }

    public function lerArquivoCSV(string $caminho)
    {
        /* echo $caminho; */
        $handler = fopen($caminho, 'r');
        while (($linha = fgetcsv($handler, 10000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
    }
}
