<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zonas;
use Illuminate\Http\Request;

class ZonasController extends Controller
{
    //
    public function index()
    {
        $zonas = Zonas::all();
        return view('Admin.layouts.Zonas.index', compact('zonas'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nombre' => 'required|max:255',
        ]);

        if ($validated) {
            $new_zona = new Zonas();
            $new_zona->nombre = $request->input('nombre');
            $new_zona->save();
            return redirect()->route('admin/zonas');
        }else {
            
        }
    }
}
