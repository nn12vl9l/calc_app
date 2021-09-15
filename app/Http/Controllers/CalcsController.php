<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        if ($operator == 'addition') {
            $result = $num1 + $num2;
        } elseif ($operator == 'subtranction') {
            $result = $num1 - $num2;
        } elseif ($operator == 'multiplocation') {
            $result = $num1 * $num2;
        } elseif ($operator == 'division') {
            $result = $num1 / $num2;
        } else {
            $result = '正しい演算子を指定してください';
        }

        return view('result', ['result' => $result]);
    }
}
