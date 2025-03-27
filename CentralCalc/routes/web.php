<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoController;

Route::get('/', [CalculoController::class, 'index'])->name('home');
Route::get('/calculadora/{tipo}', [CalculoController::class, 'exibirFormulario'])->name('form');
Route::post('/calculadora/{tipo}/calcular', [CalculoController::class, 'calcular'])->name('calculate');
