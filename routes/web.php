<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ControladorPrueba;


Route::post('/ruta-de-destino', [ControladorPrueba::class, 'metodo'])->name('ruta.de.destino');

