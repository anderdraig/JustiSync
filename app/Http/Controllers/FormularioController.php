<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'correo' => 'required|email',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Aquí puedes guardar en BD o enviar un correo
        // Solicitud::create($request->all());

        return back()->with('success', 'Solicitud enviada con éxito.');
    }
}
