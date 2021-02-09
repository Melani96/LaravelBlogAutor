<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class libroController extends Controller
{
    public function idLibro (Request $request, $id){
        
        $libros = DB::table('libros')->where('idLibro', '=', $id)->get();
        
        return view('libro', compact('libros'));
    }
}
