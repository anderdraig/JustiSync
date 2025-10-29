<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/enviar-solicitud', [App\Http\Controllers\FormularioController::class, 'store'])->name('enviar.solicitud');
