<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function control()
    {
        return view('index');
    }

    public function cedula($id)
    {
        return view('details');
    } 

    public function saludo($nombre)
    {
        return 'Hola '.$nombre;
    }
}
