<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
    
    public function rondaPreguntaIntentos(){
        return $this->hasMany(RondaPreguntaIntento::class, 'rondas_id');
    }
}