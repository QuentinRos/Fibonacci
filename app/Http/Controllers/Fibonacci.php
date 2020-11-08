<?php

namespace App\Http\Controllers;

use App\Classes\Fibo;
use Illuminate\Http\Request;


class Fibonacci extends Controller
{
    public function FibonacciSuite(Request $request)
    {
        // création d'un objet Fibo en passant le nombre d'itération et la valeur maximale souhaitées
        $fibo = new Fibo($request);

        // retourne le résultat dans la vue welcome
        return View("welcome")->with(['fibo'=>$fibo]);
    }
}
