<?php

use App\Http\Controllers\ControladorCliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [ControladorCliente::class, 'control']);

Route::get('/cliente/{nombre}', [ControladorCliente::class, 'saludo']);

Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);



// Route::get('/cliente/{id}', function ($id) {
//     return '<h1>Mi identificacion es</h1>'.$id;
// });


