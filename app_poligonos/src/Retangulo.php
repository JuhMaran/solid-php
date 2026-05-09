<?php

namespace AppPoligonos;

// Classe Retângulo é a classe pai, ou seja, a classe base. 
class Retangulo
{

    // Atributos protegidos
    protected $largura;
    protected $altura;

    // Getters e Setters
    public function getLargura(): float
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    // Método para calcular a área
    public function getArea(): float
    {
        return $this->largura * $this->altura;
    }
}
