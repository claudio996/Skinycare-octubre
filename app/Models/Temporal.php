<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporal extends Model
{
    use HasFactory;

    protected $table = "temporals";
    protected $fillable =
    [
        'nombre', 'sexo', 'servicios_id', 'zonas', 'numero_min_sesion',
        'numero_max_sesion', 'precio_min_sesion',
        'precio_max_sesion', 'url_imagen', 'descuento',
        'descripcion', 'estado'
    ];
    protected $hidden = ['id'];
}
