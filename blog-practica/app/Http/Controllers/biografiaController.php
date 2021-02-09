<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class biografiaController extends Controller
{
    public function mostrarBiografia() {
        //Recogemos los datos del autor para luego mostrarla
        $biografias = DB::table('autor')->select('nombre', 'apellidos', 'fechaNacimiento', 'ciudadNatal', 'biografia')->get();
        
        return view('biografia', compact('biografias'));
    }
}
