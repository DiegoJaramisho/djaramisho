<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    public function run()
    {
        $laravel = [
            [
                'nombre' => '¿Qué es Laravel?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => '¿Cuál es la última versión de Laravel?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => '¿Qué es MVC?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => '¿Qué es ORM?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => '¿Cómo identificar un archivo de plantilla Blade?',
                'categorias_id' => 1,
            ],
        ];
        $js = [
            [
                'nombre' => '¿JavaScript es un lenguaje de programación ...?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Para qué sirve la función isNaN en JavaScript?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Qué es el operador === en JavaScript?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Qué es el método unshift en JavaScript?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Qué es el método push en JavaScript?',
                'categorias_id' => 2,
            ],
        ];
        $html = [
            [
                'nombre' => '¿Qué es Html5?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => '¿Todas las etiquetas HTML vienen en pares?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => '¿Cómo se inserta un comentario en HTML?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => '¿Son las etiquetas <br> la única manera de separar secciones de texto?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => '¿Cómo se crea un enlace que se conectará a otra página web cuando se hace clic en él?',
                'categorias_id' => 3,
            ],
        ];
        $css = [
            [
                'nombre' => '¿Qué es CSS?',
                'categorias_id' => 4,
            ],
            [
                'nombre' => '¿Cómo hacemos una esquina redondeada usando CSS?',
                'categorias_id' => 4,
            ],
            [
                'nombre' => '¿Cual es el cursor que usa por defecto una etiqueta <a></a>?',
                'categorias_id' => 4,
            ],
            [
                'nombre' => '¿Qué es CSS flexbox?',
                'categorias_id' => 4,
            ],
            [
                'nombre' => '¿Un elemento de html tiene id y clase. El id (tiene la propiedad: \'color\': #000) y la clase (tiene la propiedad: \'color\': #fff). Cual tiene prioridad?',
                'categorias_id' => 4,
            ],
        ];
        $angular = [
            [
                'nombre' => '¿Que es Angular?',
                'categorias_id' => 5,
            ],
            [
                'nombre' => '¿Angular JS es igual a Angular?',
                'categorias_id' => 5,
            ],
            [
                'nombre' => '¿Que es Angular CLI?',
                'categorias_id' => 5,
            ],
            [
                'nombre' => '¿Que es un componente en Angular?',
                'categorias_id' => 5,
            ],
            [
                'nombre' => '¿Que es un servicio en Angular?',
                'categorias_id' => 5,
            ],
        ];
        $preguntas = array_merge($laravel, $js, $html, $css, $angular);
        foreach ($preguntas as $value) {
            Pregunta::create([
                'nombre' => $value['nombre'],
                'categorias_id' => $value['categorias_id'],
            ]);
        }
    }
}
