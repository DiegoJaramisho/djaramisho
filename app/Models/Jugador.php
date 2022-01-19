<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    protected $table = 'jugadores';

    public function intentos(){
        return $this->hasMany(Intento::class, 'jugadores_id');
    }

    public function premios(){
        return $this->hasMany(Premio::class, 'jugadores_id');
    }
}