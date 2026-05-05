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

    public function lerArquivoCSV(string $caminho): void
    {
        /* echo $caminho; */
        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho): void
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle); // o ponteiro interno de leitura do arquivo é incrementado a cada execução do fgets()
            $this->setDados(
                substr($linha, 11, 30), // Nome
                substr($linha, 0, 11),  // CPF
                substr($linha, 41, 50)  // E-mail
            );
        }
        fclose($handle);
    }
}
