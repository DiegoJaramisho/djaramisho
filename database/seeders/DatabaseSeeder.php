<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RondaSeeder::class,
            CategoriaSeeder::class,
            PreguntaSeeder::class,
            OpcionSeeder::class,
        ]);
    }
}
