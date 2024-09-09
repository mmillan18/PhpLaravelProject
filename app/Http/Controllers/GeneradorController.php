<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    public function generarNumero()
    {
        // Generar un número aleatorio entre 1 y 100
        $numero = rand(1, 100);

        // Retornar la vista 'numeros' con el número generado
        return view('numeros', ['numero' => $numero]);
    }
}
