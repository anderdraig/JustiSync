<?php
namespace App\Http\Controllers;

use App\Models\Servicio;

class ServicesController extends Controller {

    public function index() {
        $servicios = Servicio::where('activo', true)
        ->orderBy('categoria')
        ->get()
        ->groupBy('categoria');

    return view('pages.services', compact('servicios'));
    }


}