<?php

namespace App\Classes;

class Fibo
{
    public $nombre;

    public function __construct($iteration){
        $a = 0;
        $nombre = 1;
        for($i = 2; $i <=$iteration; $i++)
        {
            $result = $a + $nombre;
            $a = $nombre;
            $nombre = $result;
        }
        $this->nombre = $nombre;
    }

    public function getNumber()
    {
        return $this->nombre;
    }
}
