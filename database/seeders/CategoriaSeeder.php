<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $categorias = [
            'Laravel',
            'Js',
            'Html5',
            'Css',
            'Angular',
        ];
        foreach ($categorias as $value) {
            Categoria::create([
                'nombre' => $value,
            ]);
        }
    }
}
