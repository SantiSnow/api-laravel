<?php

namespace App\Http\Controllers;

use App\Models\personajes;
use App\Models\planetas;
use Illuminate\Http\Request;

class datosController extends Controller
{
    public function returnDatos()
    {
        return personajes::all();
    }

    public function returnPlanetas()
    {
        return planetas::all();
    }

    public function returnPersonaje($id){
        return personajes::find($id);
    }
    public function returnPlaneta($id){
        return planetas::find($id);
    }
}
