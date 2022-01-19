<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'preguntas_id',
        'correcta',
    ];
    protected $table = 'opciones';

    public function preguntas(){
        return $this->belongsTo(Pregunta::class);
    }

    public function rondaPreguntaIntentos(){
        return $this->hasMany(RondaPreguntaIntento::class, 'opciones_id');
    }
}