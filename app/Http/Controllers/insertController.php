<?php

namespace App\Http\Controllers;

use App\Models\personajes;
use Illuminate\Http\Request;

class insertController extends Controller
{
    public function insertPersonaje(Request $req){
        $personaje = new personajes;

        $personaje->Nombre = $req->Nombre;
        $personaje->Estado = $req->Estado;
        $personaje->Planeta_Origen = $req->Planeta_Origen;
        $personaje->Rango = $req->Rango;
        $personaje->Sensible = $req->Sensible;
        $personaje->Trilogia = $req->Trilogia;
        $personaje->Peliculas = $req->Peliculas;
        $personaje->Raza = $req->Raza;
        $personaje->Genero = $req->Genero;
        $personaje->Interprete = $req->Interprete;
        $personaje->Foto = $req->Foto;

        $personaje->save();

        /*
         *
         * 'Estado',
        'Planeta_Origen',
        'Rango',
        'Sensible',
        'Trilogia',
        'Peliculas',
        'Raza',
        'Genero',
        'Interprete',
        'Foto',
         *
         */
    }
}
