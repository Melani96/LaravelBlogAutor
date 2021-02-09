<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SugerenciaMailable;

class sugerenciaController extends Controller
{
    public function enviarSugerencia(Request $request){
        
        $nombre = $request->nombre;
        $mail = $request->email;
        $asunto = $request->asunto;
        $mensaje = $request->mensaje;
            
        Mail::to('autor@gmail.com')->send(new SugerenciaMailable($nombre, $mail, $asunto, $mensaje));
        
        session()->put('realizado', 'Mensaje enviado con exito');
        
        return back();
        
    }
}
