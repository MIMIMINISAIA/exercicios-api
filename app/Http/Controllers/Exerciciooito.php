<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exerciciooito extends Controller
{
    public function tabuada(Request $request)
    {
        $numero = $request->numero_tabuada;

        $numeros = [];

        for ($i = 0; $i <= 10; $i++) {
            $calculo = $numero * $i;
            $resultado = $numero . " x " . $i . " = " . $calculo;
            array_push($numeros, $resultado);
        }
        return json_encode([
           "resultado" => $numeros
        ]);


    }
}
