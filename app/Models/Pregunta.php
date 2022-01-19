<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categorias_id',
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function opciones(){
        return $this->hasMany(Opcion::class, 'preguntas_id');
    }

    public function rondaPreguntaIntentos(){
        return $this->hasMany(RondaPreguntaIntento::class, 'preguntas_id');
    }
}