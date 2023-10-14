<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetallePromociones;
use App\Models\Promociones;
use App\Models\Servicios;
use App\Models\Temporal;
use App\Models\Zonas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PromocionesController extends Controller
{
    //
    public function index()
    {
        $zonas =  Zonas::all();
        $servicios = Servicios::all();
        $promociones = Promociones::all();
        return view('Admin.layouts.Promociones.index', compact('zonas', 'servicios', 'promociones'));
    }

    public function tratamientos_crear()
    {
        return view('layouts.Admin.Tratamientos.create');
    }

    public function store(Request $request)
    {
        $promociones =  new Promociones();
        $detallePromo = new DetallePromociones();
        $temporal = new Temporal();

        $zonas =  $request->input('zonas');
        $zonas_all = implode('+', array_values($zonas));

        // $request->validate([
        //     'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        // ]);


        $image = $request->file('imagen')->store('public/images');
        $url = Storage::url($image);

        //Calcular total

        $temporal->nombre = $request->nombre;
        $temporal->sexo = $request->sexo;

        $temporal->servicios_id = $request->servicio;
        $temporal->zonas = $zonas_all;
        $temporal->numero_min_sesion = $request->min_sesion;
        $temporal->numero_max_sesion = $request->max_sesion;
        //Insert en detalle
        $temporal->precio_min_sesion = $request->precio_min_sesion;
        $temporal->precio_max_sesion = $request->precio_max_sesion;
        $temporal->url_imagen = $url;
        $temporal->descuento = 10;
        $temporal->descripcion = $request->descripcion;
        $temporal->save();
        $temporal->truncate();
        // $promociones->numero_sesiones = $request->numero_sesiones;

        // $tratamientos->sexo = $request->sexo;

    }
}
