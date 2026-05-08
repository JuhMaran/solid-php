<?php

namespace AppEtl\extrator;

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
}
