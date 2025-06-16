<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoController extends Controller
{
    public function bubbleSort(Request $request)
    {
        $sorted = null;

        if ($request->isMethod('post')) {
            $input = $request->input('numbers');
            $numbers = array_map('intval', explode(',', $input));
            $n = count($numbers);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($numbers[$j] > $numbers[$j + 1]) {
                        $temp = $numbers[$j];
                        $numbers[$j] = $numbers[$j + 1];
                        $numbers[$j + 1] = $temp;
                    }
                }
            }

            $sorted = $numbers;
        }

        return view('algo.bubbleSort', compact('sorted'));
    }

    public function recursiveFactorial(Request $request)
    {
        $result = null;

        if ($request->isMethod('post')) {
            $num = (int) $request->input('number');
            $result = $this->factorial($num);
        }

        return view('algo.recursiveFactorial', compact('result'));
    }

    private function factorial($n)
    {
        if ($n <= 1) return 1;
        return $n * $this->factorial($n - 1);
    }
}


