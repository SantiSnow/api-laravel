<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personajes extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Estado',
        'Planeta_Origen',
        'Rango',
        'Sensible',
        'Trilogia',
        'Peliculas',
        'Raza',
        'Genero',
        'Interprete',
        'Foto',

    ];
}
