<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Opcionalmente, puedes especificar la tabla y los campos asignables
    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'apellido',
        'id_empleado',
    ];
}
