<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    var $clients = [ 
        [ 'id' => 0 , 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com' ] ,
        [ 'id' => 1 , 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com' ] ,
    ];

    public function control()
    {
        return view('index', ['clientes' => $this->clients]);
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
