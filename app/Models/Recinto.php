<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recinto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'territorio'
    ];

    public function animal()
    {
        return $this->hasMany(Animal_Recinto::class, 'id_recinto');
    }

    public function especie()
    {
        return $this->hasMany(Especie_Recinto::class, 'id_recinto');
    }

}
