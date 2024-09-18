<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmpleadoController::class, 'mostrarFormulario']);
Route::post('/generar-id', [EmpleadoController::class, 'generarID']);

// Ruta para mostrar el historial de empleados
Route::get('/historial', [EmpleadoController::class, 'mostrarHistorial']);
