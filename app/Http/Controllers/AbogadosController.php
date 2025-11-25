<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;

class AbogadosController extends Controller
{
    public function index()
    {
        // abogados activos
        $abogados = Abogado::where('estado_actual', true)->get();

        return view('pages.abogados', compact('abogados'));
    }

    //vista preview
    public function preview()
    {
        $abogados = Abogado::where('estado_actual', true)
            ->take(4)
            ->get();

        return view('pages.home', compact('abogados'));
    }

}
