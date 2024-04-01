<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_especie',
        'nombre',
        'edad',
        'estado',
        'territorio'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie');
    }

    public function recinto()
    {
        return $this->hasMany(Animal_Recinto::class, 'id_animal');
    }

    public function cuidadores()
    {
        return $this->hasMany(Animal_Cuidador::class, 'id_animal');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad_Animal::class, 'id_animal');
    }

}
