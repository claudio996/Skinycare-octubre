<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Zonas extends Model
{
    use HasFactory;
    protected $table = "zonas";
    protected $fillable = ['nombre','estado',];
    protected $hidden = ['id'];

    public function Promociones(): BelongsTo
    {
        return $this->belongsTo(Promociones::class);
    }
}
