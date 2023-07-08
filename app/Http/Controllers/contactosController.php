<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\contactoFront;

class contactosController extends Controller
{
    public function enviarMensaje(Request $request)
{
    // Validar los datos del formulario si es necesario
    $validated = $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required'
    ]);

    // Procesar los datos del formulario
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $mensaje = $request->input('mensaje');

    // Lógica para enviar el mensaje o almacenarlo en la base de datos

    return response()->json(['mensaje' => 'Mensaje enviado correctamente'], 200);
}


}
