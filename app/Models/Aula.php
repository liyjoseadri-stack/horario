<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//union de tablas entre edificio y aula

class Aula extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'capacidad', 'edificio_id'];

    public function edificio()
    {
        return $this->belongsTo(Edificio::class);
    }

    public function mobiliarios()
    {
        return $this->hasMany(Mobiliario::class);
    }
}