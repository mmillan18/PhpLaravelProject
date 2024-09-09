<?php

use App\Http\Controllers\GeneradorController;
use Illuminate\Support\Facades\Route;

// Ruta inicial que muestra el número aleatorio al cargar la página
Route::get('/', [GeneradorController::class, 'generarNumero']);

// Ruta para generar un nuevo número al enviar el formulario (usando método POST)
Route::post('/generar', [GeneradorController::class, 'generarNumero']);
