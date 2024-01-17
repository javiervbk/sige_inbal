<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pieza;
class PiezaController extends Controller
{
    public function obtenerPiezas()
    {
        $piezas = Pieza::limit(10)->get();
        return $piezas;
    }
}
