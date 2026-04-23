<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

// alteração de rota para a calculadora e não a telinha preta do laravel. tomei mó susto kkkkk
Route::get('/', [CalculadoraController::class, 'index']);
Route::post('/calcular', [CalculadoraController::class, 'calcular']);