<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjerciciosController extends Controller
{

	private $constante = 10;

    public function resultado($num1, $num2=null)
    {
    	if ($num2 === null) {
			$resultado = ($num1 % 2) ? 'impar' : 'par';
		} else {
			$resultado = $num1 * $num2 * $this->constante;
		}
		return $resultado;
    }
}
