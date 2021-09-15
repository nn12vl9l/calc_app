<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        if ($operator == 'addition') {
            $total = $num1 + $num2;
        }
        elseif ($operator == 'subtranction') {
            $total = $num1 - $num2;
        }
        elseif ($operator == 'multiplocation') {
            $total = $num1 * $num2;
        }
        elseif ($operator == 'division') {
            $total = $num1 / $num2;
        }
        else {
            $total = '正しい演算子を指定してください';
        }

        return view('result', ['total' => $total]);
    }
}
