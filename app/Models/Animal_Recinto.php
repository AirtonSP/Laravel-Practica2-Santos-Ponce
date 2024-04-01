<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal_Recinto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_animal',
        'id_recinto'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'id_recinto');
    }

}
