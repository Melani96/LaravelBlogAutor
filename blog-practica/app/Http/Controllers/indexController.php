<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function mostrarEntradas()
    {
        //Recogemos la entrada del autor para luego mostrarla
        $entradas = DB::table('entradas')->select('entrada', 'fechaCreado')->orderByDesc('idEntrada')->get();
        
        //Devolvemos la view index con los datos que hemos solicitado
        return view('home', compact('entradas'));
    }
}
