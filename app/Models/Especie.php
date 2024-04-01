<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tipo'
    ];

    public function animal()
    {
        return $this->hasMany(Animal::class, 'id_especie');
    }

    public function recinto()
    {
        return $this->hasMany(Especie_Recinto::class, 'id_especie');
    }

}
