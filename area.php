<?php

require __DIR__. '/vendor/autoload.php';

class Retangulo
{
    public function __construct ($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    public function area()
    {
        return $this->largura * $this->largura;
    }
}

class ImprimeResultados
{
    public function imprime(Retangulo $retangulo)
    {
        echo $retangulo->area();
    }
}

$imprime_resultado = new ImprimeResultados;
$imprime_resultado->imprime(new Quadrado(5, 10));
