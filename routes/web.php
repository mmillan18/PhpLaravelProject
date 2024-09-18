<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

// Ruta para mostrar el formulario
Route::get('/', [EmpleadoController::class, 'mostrarFormulario']);

// Ruta para generar el ID de empleado
Route::post('/generar-id', [EmpleadoController::class, 'generarID']);
