<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promociones extends Model
{
    use HasFactory;
    protected $table = "promociones";
    
    protected $fillable = [
        'nombre',
        'sexo', 'servicio_id', 'zonas',
        'numero_min_sesion', 'numero_max_sesion',
        'estado'
    ];

    protected $hidden = ['id'];

    public function servicios(): HasMany
    {
        return $this->servicios(servicios::class);
    }

    public function zonas(): HasMany
    {
        return $this->zonas(zonas::class);
    }
}
