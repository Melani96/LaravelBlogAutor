<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class comprarController extends Controller
{
    public function store(Request $request)
    {
        $compra = new Compra;
        
        $compra->nombre=$request->nombre;
        $compra->email=$request->email;
        $compra->calle=$request->calle;
        $compra->cPostal=$request->cPostal;
        $compra->ciudad=$request->ciudad;
        $compra->provincia=$request->provincia;
        $compra->libroId=$request->libroId;
        
        $compra->save();
        session()->put('realizado', 'Compra realizada con exito');
        
        return back();
    }
}
