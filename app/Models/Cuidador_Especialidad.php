<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuidador_Especialidad extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_cuidador',
        'id_especialidad'
    ];

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }
    
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'id_especialidad');
    }
}
