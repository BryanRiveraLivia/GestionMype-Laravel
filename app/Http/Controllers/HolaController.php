<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    
	public function hola($nombre)
	{
		return "hola {$nombre}";
	}

}
