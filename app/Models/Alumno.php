<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable =["nombre", "apellido", "email", "telefono", "direccion"];
    public function idiomas()
    {
        return $this->hasMany(Idioma::class);
    }
}
