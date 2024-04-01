<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie_Recinto extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'id_especie',
        'id_recinto'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie');
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'id_recinto');
    }
}
