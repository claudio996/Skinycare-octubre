<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servicios extends Model
{
    use HasFactory;
    protected $table = "servicios";
    protected $fillable = ['nombre','sexo', 'tipo', 'estado'];
    protected $hidden = ['id'];


    // public function Tratamientos(): BelongsTo
    // {
    //     return $this->belongsTo(Tratamientos::class);
    // }

    
    public function Promociones(): BelongsTo
    {
        return $this->belongsTo(Tratamientos::class);
    }
}
