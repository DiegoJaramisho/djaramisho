<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RondaPreguntaIntento extends Model
{
    use HasFactory;

    protected $fillable = [
        'preguntas_id',
        'rondas_id',
        'opciones_id',
        'intentos_id',
    ];

    public function preguntas(){
        return $this->belongsTo(Pregunta::class);
    }

    public function rondas(){
        return $this->belongsTo(Ronda::class);
    }

    public function opciones(){
        return $this->belongsTo(Opcion::class);
    }

    public function intentos(){
        return $this->belongsTo(Intento::class);
    }

    public function premios(){
        return $this->hasMany(Premio::class, 'ronda_pregunta_intentos_id');
    }
}