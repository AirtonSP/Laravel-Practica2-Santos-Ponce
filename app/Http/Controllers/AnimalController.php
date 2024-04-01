<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    //
    public function index (Request $request) 
    { 
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $animales = Animal::where('nombre','>=', $params['nombre']) 
        ->limit($size)->get();
        return $animales;
    }

    public function show ($id)
    { 
        $animal = Animal::find($id);
        return $animal; 
    }

    public function store (Request $request) 
    { 
        $params = $request->all(); 
        $animal = Animal::create([ 
            'id_especie' =>$params['id_especie'],
            'nombre' =>$params['nombre'], 
            'edad' =>$params['edad'],
            'estado' =>$params['estado'],
            'territorio' =>$params['territorio']
        ]);
        return $animal; 
    }

    public function update ($id,Request $request) 
    { 
        $params = $request->all(); 
        Animal::find($id)->update([
            'nombre' =>$params['nombre'], 
            'edad' =>$params['edad'], 
            'estado' =>$params['estado'],
            'territorio' =>$params['territorio']
        ]);
        return 'Datos actualizados';
    }

    public function destroy ($id) 
    { 
        Animal::find($id)->delete();
        return 'Datos eliminados'; 
    } 
}
