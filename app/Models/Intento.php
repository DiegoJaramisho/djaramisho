<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intento extends Model
{
    use HasFactory;

    protected $fillable = [
        'jugadores_id',
    ];

    public function jugadores(){
        return $this->belongsTo(Jugador::class);
    }

    public function rondaPreguntaIntentos(){
        return $this->hasMany(RondaPreguntaIntento::class, 'intentos_id');
    }
}