<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//union de tablas entre edificio y aula
class Edificio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}