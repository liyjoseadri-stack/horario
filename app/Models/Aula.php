<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre','capacidad','edificio_id'];

    // Relación con Edificio
    public function edificio()
    {
        return $this->belongsTo(App\Models\Edificio::class);
    }
}