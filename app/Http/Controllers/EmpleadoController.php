<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function mostrarFormulario()
    {
        // Muestra el formulario inicial
        return view('empleado');
    }

    public function generarID(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
        ]);

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');

        // Generar un ID aleatorio (por ejemplo, un número de 8 caracteres alfanuméricos)
        $idEmpleado = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

        // Retornar la vista con los datos del empleado
        return view('empleado', compact('nombre', 'apellido', 'idEmpleado'));
    }
}
