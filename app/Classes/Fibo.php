<?php

namespace App\Classes;

class Fibo
{
    public $nombre;
    public $vieuxnombre;

    public function __construct($request){
        $a = 0;
        $nombre = 1;
        for($i = 2; $i <=$request->iteration; $i++)
        {
            $result = $a + $nombre;
            $a = $nombre;

            // Si la valeur dépasse la valeur maximale demandée :
            if ($result > $request->max)
            {
                break;
            }
            $nombre = $result;
        }
        $this->vieuxnombre = $a;
        $this->nombre = $nombre;
        $this->iterations = $i-1;
    }

    public function getNumber()
    {
        return $this->nombre;
    }
}
