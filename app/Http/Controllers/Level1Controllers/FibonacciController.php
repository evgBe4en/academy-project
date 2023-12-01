<?php

namespace App\Http\Controllers\Level1Controllers;

use App\Http\Controllers\Controller;

class FibonacciController extends Controller
{
    public function getFibonacciNumber($index)
    {
        if ($index < 0) {
            return response()->json(['error' => 'Індекс повинен бути невід\'ємним числом'], 400);
        }

        $number = $this->calculateFibonacciNumber($index);

        return response()->json(['index' => $index, 'number' => $number], 200);
    }

    private function calculateFibonacciNumber($index)
    {
        if ($index <= 1) {
            return $index;
        }

        $fibonacciMinusTwo = 0;
        $fibonacciMinusOne = 1;
        $fibonacciNumber = 0;

        for ($i = 2; $i <= $index; $i++) {
            $fibonacciNumber = $fibonacciMinusTwo + $fibonacciMinusOne;
            $fibonacciMinusTwo = $fibonacciMinusOne;
            $fibonacciMinusOne = $fibonacciNumber;
        }

        return $fibonacciNumber;
    }
}
