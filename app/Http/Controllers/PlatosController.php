<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
class PlatosController extends Controller
{
    //
    public function index(){
        $postres = Plato::where('categoria', 'postre');
        $desayunos = Plato::where('categoria', 'desayuno');
        $fondo = Plato::where('categoria', 'fondo');
        $segundos = Plato::where('categoria', 'segundo');
        $pescados = Plato::where('categoria', 'pescado');
        $bebidas = Plato::where('categoria', 'bebida');
        return view('menu', compact('postres','desayunos','fondo','segundos','pescados','bebidas'));
        
    }

    
}
