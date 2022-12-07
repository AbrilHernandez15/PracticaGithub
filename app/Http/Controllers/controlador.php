<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarInsecto;

class controlador extends Controller
{
    function Formulario(){
        return view('formulario');
    }
    function Tabla(){
        return view('tabla');
    }
    public function procesarInsectos(validarInsecto $req){
        return redirect('/')->with('confirmacion', 'tu insecto llego al controlador');
    }

}
