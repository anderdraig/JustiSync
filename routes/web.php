<?php

use App\Http\Controllers\AbogadosController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::post('/enviar-solicitud', [App\Http\Controllers\FormularioController::class, 'store'])->name('enviar.solicitud');

Route::get('/servicios', [ServicesController::class, 'index'])->name('servicios');

Route::get('/abogados', [AbogadosController::class, 'index'])->name('abogados');

Route::get('/', [AbogadosController::class, 'preview'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contacto');