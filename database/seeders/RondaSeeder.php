<?php

namespace Database\Seeders;

use App\Models\Ronda;
use Illuminate\Database\Seeder;

class RondaSeeder extends Seeder
{
    public function run()
    {
        $rondas = [
            'Fácil',
            'Medio - Fácil',
            'Medio',
            'Medio - Alta',
            'Alta',
        ];
        foreach ($rondas as $value) {
            Ronda::create([
                'nombre' => $value,
            ]);
        }
    }
}
