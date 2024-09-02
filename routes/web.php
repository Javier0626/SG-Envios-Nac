<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
Route::resource('clientes', ClientesController::class);
    