<?php

interface Passaro {
    public function anda();
    public function nada();
}

interface PassaroQueVoa extends Passaro {
    public function voa();
}

class Andorinha implements PassaroQueVoa {
    public function voa()
    {
        //
    }

    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
}

class Pinguin implements Passaro {
    public function voa()
    {
        throw new \Exception('Não use este método');
    }

    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
}
