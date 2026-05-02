<?php

use PHPUnit\Framework\TestCase;

class itemTest extends TestCase
{

    public function testEstouFuncionando()
    {
        $valor = 10;
        $this->assertEquals($valor, 10);
    }
}
