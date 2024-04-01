<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal_Cuidador extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_animal',
        'id_cuidador'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }
}
