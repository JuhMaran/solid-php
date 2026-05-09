<?php

namespace AppPoligonos\poligonos;

class Quadrado
{

    // Atributos protegidos
    protected $largura;
    protected $altura;

    // Getters e Setters
    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    // Fere a tipagem forte de compartamento
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }
}
