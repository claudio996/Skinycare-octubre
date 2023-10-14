<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePromociones extends Model
{
    use HasFactory;
    protected $table = "detalle_prommociones";

    protected $fillable = [
        'precio_min_sesion', 'precio_max_sesion', 'descuento', 'url_imagen', 'descripcion', 'total',
        'promocion_id'
    ];
}


