<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    public function control()
    {
        return 'Nueva controlador';
    }

    public function cedula($id)
    {
        return 'Mi identificación es: '. $id;
    } 

    public function saludo($nombre)
    {
        return 'Hola '.$nombre;
    }
}
