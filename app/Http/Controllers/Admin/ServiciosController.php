<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    public function index()
    {
        $servicios = Servicios::all();
        return view('Admin.layouts.Servicios.index', compact('servicios'));
    }

    public function store(Request $request)
    {
        $new_servicios = new Servicios();
        $new_servicios->nombre = $request->input('nombre');
        $new_servicios->tipo = $request->input('tipo');
        $new_servicios->sexo = $request->input('sexo');

        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required',
            'sexo' => 'required'
        ]);

        if ($validated) {
            $new_servicios->save();
            return redirect()->route('admin/servicios');
        }
    }
}
