<?php

namespace AppPoligonos;

class Poligono
{

    // atributo privado
    private $forma;

    // getters e setters
    public function getForma(): object
    {
        return $this->forma;
    }

    public function setForma(object $forma): void
    {
        $this->forma = $forma;
    }

    // Método para calcular a área
    public function getArea(): float
    {
        return $this->getForma()->getAltura() * $this->getForma()->getLargura();
    }
}
