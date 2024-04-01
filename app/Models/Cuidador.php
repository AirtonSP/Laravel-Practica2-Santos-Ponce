<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuidador extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'nombre',
        'edad'
    ];

    public function animal()
    {
        return $this->hasMany(Animal_Cuidador::class, 'id_cuidador');
    }

    public function especilidad()
    {
        return $this->hasMany(Cuidador_Especialidad::class, 'id_cuidador');
    }

}
