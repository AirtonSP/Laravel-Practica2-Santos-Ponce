<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'nombre',
        'dia',
        'hora'
    ];

    public function animal()
    {
        return $this->hasMany(Actividad_Animal::class, 'id_actividad');
    }

}
