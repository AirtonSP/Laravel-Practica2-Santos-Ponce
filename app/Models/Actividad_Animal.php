<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad_Animal extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_actividad',
        'id_animal'
    ];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

}
