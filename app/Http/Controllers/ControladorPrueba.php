<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{
    public function metodo(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return redirect()->back()->with('success', 'Formulario enviado correctamente');
    }
}