<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aula; // ✅ Importamos Aula

class Edificio extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre'];

    // Relación con Aulas
    public function aulas()
    {
        return $this->hasMany(Aula::class); // ✅ Ahora Laravel lo reconoce
    }
}