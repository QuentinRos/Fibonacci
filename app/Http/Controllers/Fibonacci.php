<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fibonacci extends Controller
{
    public function FibonacciSuite(Iteration $iteration)
    {
        $u = 0;
        $v = 1;
        for($i = 2; $i <=$iteration; $i++)
        {
            $t = $u + $v;
            $u = $v;
            $v = $t;
        }
        return $v;
        /*
         * int fibonacci(int n) {
          int u = 0;
          int v = 1;
          int i, t;

          for(i = 2; i <= n; i++) {
            t = u + v;
            u = v;
            v = t;
          }
          return v;
        }
         */
    }
}
