<?php

namespace App\Http\Controllers;

use App\Classes\Fibo;
use Illuminate\Http\Request;


class Fibonacci extends Controller
{
    public function FibonacciSuite(Request $request)
    {
        $fffibo = new Fibo($request);

        return View("welcome")->with(['fibo'=>$fffibo]);
    }
}
