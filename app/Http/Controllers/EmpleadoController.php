<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; // Importa el modelo Empleado

class EmpleadoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('empleado');
    }

    public function generarID(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
        ]);

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');

        // Generar un ID alfanumérico único de 8 caracteres
        $idEmpleado = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

        // Crear un nuevo registro en la base de datos
        $empleado = new Empleado();
        $empleado->nombre = $nombre;
        $empleado->apellido = $apellido;
        $empleado->id_empleado = $idEmpleado;
        $empleado->save();

        return view('empleado', compact('nombre', 'apellido', 'idEmpleado'));
    }

    public function mostrarHistorial()
    {
        // Obtener todos los empleados de la base de datos
        $empleados = Empleado::all();

        return view('historial', compact('empleados'));
    }
}
