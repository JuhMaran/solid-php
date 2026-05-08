<?php

namespace AppEtl\extrator;

class Txt extends Arquivo
{

    public function lerArquivo(string $caminho): array
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

        return $this->getDados();
    }
}
