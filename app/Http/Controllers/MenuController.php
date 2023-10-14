<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function Nosotros () {
        return view('layouts.Paginas.Nosotros');
    }

    public function Contacto () {
        return view('layouts.Paginas.Contacto');
    }

}
