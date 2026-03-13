<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'aula_id'];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}