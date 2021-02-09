<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class librosController extends Controller
{
    public function mostrarLibros(){
        $libros = DB::table('libros')->select('idLibro','titulo')->get();
        
        return view('publicado', compact('libros'));
    }
}
