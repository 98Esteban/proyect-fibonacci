<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calculate($n)
    {
        $result = $this->fibonacci($n);

        return response()->json(['value' => $result]);
    }


    private function fibonacci($n)
    {
        if ($n <= 1) {
            return $n;
        }

        return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
    }
}
