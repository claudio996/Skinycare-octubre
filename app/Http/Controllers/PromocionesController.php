<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocionesController extends Controller
{
    public function PromocionFemenina(Request $request)
    {


        
       /*  $data = DB::table('Promociones')
            ->join('servicios', 'servicios.id', '=', 'promociones.servicios_id')

            ->select('promociones.*', 'zonas')
            ->where('.promociones.sexo', '=', 'F')
            ->where('.servicios.nombre', '=', 'Promoción')->simplePaginate(6);

        if (isset($data) && count($data) > 0) {
            echo '<script language="javascript">alert("En Desarrollo");</script>';
            return redirect()->back();
            return view('layouts.Promocion-Femenina.index', compact('data'));
        } else {
            echo '<script language="javascript">alert("En Desarrollo");</script>';
            return redirect()->back();
            return 'no  hay datos';

        } */


        /*   $data = DB::table('Tratamientos')
            ->join('zonas', 'zonas.id', '=', 'tratamientos.zonas_id')
            ->join('servicios', 'servicios.id', '=', 'tratamientos.servicios_id')

            ->select('tratamientos.*', 'zonas.zona_corporal')
            ->where('.tratamientos.sexo', '=', 'F')
            ->where('.servicios.nombre', '=', 'Promoción')->simplePaginate(6);


        if (isset($data) && count($data) > 0) {
            return view('layouts.Promocion-Femenina.index', compact('data'));
        } else {
            return 'no  hay datos';
        } */
    }
    public function PromocionMasculina()
    {
        $data = DB::table('Promociones')
            ->join('servicios', 'servicios.id', '=', 'promociones.servicios_id')

            ->select('promociones.*', 'zonas')
            ->where('.promociones.sexo', '=', 'M')
            ->where('.servicios.nombre', '=', 'Promoción')->simplePaginate(6);

        if (isset($data) && count($data) > 0) {
            echo '<script language="javascript">alert("En Desarrollo");</script>';
    
            // return view('layouts.Promocion-Masculina.index', compact('data'));
        } else {
            echo '<script language="javascript">alert("En Desarrollo");</script>';
            
            // return 'no  hay datos';
        }
    }

    
    public function Checkout()
    {
        // $data = DB::table('Promociones')->where('id', $id)->get();
        return view('layouts.Checkout.index');
    }

}
