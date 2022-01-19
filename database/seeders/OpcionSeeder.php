<?php

namespace Database\Seeders;

use App\Models\Opcion;
use Illuminate\Database\Seeder;

class OpcionSeeder extends Seeder
{
    public function run()
    {
        // ¿Qué es Laravel?
        $pregunta1 = [
            [
                'preguntas_id' => 1,
                'nombre' => 'Laravel es un marco PHP gratuito y de código abierto, es utilizado para desarrollar aplicaciones web complejas.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 1,
                'nombre' => 'Laravel es un marco Java gratuito y de código abierto, es utilizado para desarrollar aplicaciones web complejas.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 1,
                'nombre' => 'Laravel es un marco Java gratuito y de código abierto, es utilizado para desarrollar mockup\'s.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 1,
                'nombre' => 'Laravel es un marco PHP gratuito y de código abierto, es utilizado para desarrollar mockup\'s.',
                'correcta' => false,
            ],
        ];
        // ¿Cuál es la última versión de Laravel?
        $pregunta2 = [
            [
                'preguntas_id' => 2,
                'nombre' => '9',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 2,
                'nombre' => '7',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 2,
                'nombre' => '8',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 2,
                'nombre' => '7.6',
                'correcta' => false,
            ],
        ];
        // ¿Qué es MVC?
        $pregunta3 = [
            [
                'preguntas_id' => 3,
                'nombre' => 'Modelo-vista-controlador es un patrón de arquitectura de hardware',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 3,
                'nombre' => 'Modelo-vista-controlador es un patrón de arquitectura de software',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 3,
                'nombre' => 'Modelo-vista-controlador es una metodologia agil',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 3,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Qué es ORM?
        $pregunta4 = [
            [
                'preguntas_id' => 4,
                'nombre' => 'Es una técnica de programación para convertir datos entre un lenguaje de programación orientado a objetos y una base de datos relacional como motor de persistencia.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 4,
                'nombre' => 'Es una técnica de programación para convertir datos entre un lenguaje de programación orientado a procedimientos y una base de datos relacional como motor de persistencia.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 4,
                'nombre' => 'Es una técnica de programación para convertir datos entre un lenguaje de programación orientado a procedimientos y una base de datos no relacional como motor de persistencia.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 4,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Cómo identificar un archivo de plantilla Blade?
        $pregunta5 = [
            [
                'preguntas_id' => 5,
                'nombre' => 'Los archivos Blade tienen .php.blade extensión.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 5,
                'nombre' => 'Los archivos Blade tienen .blade.php extensión.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 5,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 5,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿JavaScript es un lenguaje de programación ...?
        $pregunta6 = [
            [
                'preguntas_id' => 6,
                'nombre' => 'Compilado.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 6,
                'nombre' => 'Interpretado.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 6,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 6,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Para qué sirve la función isNaN en JavaScript?
        $pregunta7 = [
            [
                'preguntas_id' => 7,
                'nombre' => 'La función isNan devuelve verdadero si el argumento no es un número.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 7,
                'nombre' => 'La función isNan devuelve verdadero si el argumento es un número.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 7,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 7,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Qué es el operador === en JavaScript?
        $pregunta8 = [
            [
                'preguntas_id' => 8,
                'nombre' => 'El operador (===) arroja verdadero si ambos parametros tiene el mismo valor pero su tipo de dato es distinto.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 8,
                'nombre' => 'El operador (===) arroja verdadero si ambos argumentos tienen el mismo valor y el mismo tipo de dato.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 8,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 8,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Qué es el método unshift en JavaScript?
        $pregunta9 = [
            [
                'preguntas_id' => 9,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 9,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 9,
                'nombre' => 'El método unshift() agrega uno o más elementos al final del array',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 9,
                'nombre' => 'El método unshift() agrega uno o más elementos al inicio del array',
                'correcta' => true,
            ],
        ];
        // ¿Qué es el método push en JavaScript?
        $pregunta10 = [
            [
                'preguntas_id' => 10,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 10,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 10,
                'nombre' => 'El método push() agrega uno o más elementos al final del array',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 10,
                'nombre' => 'El método push() agrega uno o más elementos al inicio del array',
                'correcta' => false,
            ],
        ];
        // ¿Qué es Html5?
        $pregunta11 = [
            [
                'preguntas_id' => 11,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 11,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 11,
                'nombre' => 'HTML5 es un lenguaje de etiquetas, utilizado para la estructuración y la presentación de contenido en los sitios web.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 11,
                'nombre' => 'HTML5 es un lenguaje de programacion, utilizado para procesos de logica en sitios web.',
                'correcta' => false,
            ],
        ];
        // ¿Todas las etiquetas HTML vienen en pares?
        $pregunta12 = [
            [
                'preguntas_id' => 12,
                'nombre' => 'No, porque todas las etiquetas no tienen cierre',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 12,
                'nombre' => 'Si, porque toda etiqueta debe tener cierre',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 12,
                'nombre' => 'Si, porque un amigo me dijo',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 12,
                'nombre' => 'No, porque algunas etiquetas no necesitan cierre',
                'correcta' => true,
            ],
        ];
        // ¿Cómo se inserta un comentario en HTML?
        $pregunta13 = [
            [
                'preguntas_id' => 13,
                'nombre' => '//',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 13,
                'nombre' => '/* */',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 13,
                'nombre' => '<!--  -->',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 13,
                'nombre' => '#',
                'correcta' => false,
            ],
        ];
        // ¿Son las etiquetas <br> la única manera de separar secciones de texto?
        $pregunta14 = [
            [
                'preguntas_id' => 14,
                'nombre' => 'Si, es la unica.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 14,
                'nombre' => 'No, porque la etiqueta no tiene cierre',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 14,
                'nombre' => 'No, ya que existen elementos con la propiedad block',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 14,
                'nombre' => 'No, ya que existen elementos con la propiedad inline',
                'correcta' => false,
            ],
        ];
        // ¿Cómo se crea un enlace que se conectará a otra página web cuando se hace clic en él?
        $pregunta15 = [
            [
                'preguntas_id' => 15,
                'nombre' => '<a href="sitio" value="texto"/>',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 15,
                'nombre' => '<a href="sitio">texto</a>',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 15,
                'nombre' => 'Todas las Anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 15,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Qué es CSS?
        $pregunta16 = [
            [
                'preguntas_id' => 16,
                'nombre' => 'Es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de programacion y lenguaje de marcado.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 16,
                'nombre' => 'Es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 16,
                'nombre' => 'Todas las Anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 16,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Cómo hacemos una esquina redondeada usando CSS?
        $pregunta17 = [
            [
                'preguntas_id' => 17,
                'nombre' => 'Podemos hacer una esquina redondeada usando la propiedad “border-radius”, solo para el elemento div.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 17,
                'nombre' => 'Podemos hacer una esquina redondeada usando la propiedad “border-radius”, solo para el elemento a.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 17,
                'nombre' => 'Podemos hacer una esquina redondeada usando la propiedad “border-radius”, solo para el elemento img.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 17,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => true,
            ],
        ];
        // ¿Cual es el cursor que usa por defecto una etiqueta <a></a>?
        $pregunta18 = [
            [
                'preguntas_id' => 18,
                'nombre' => 'Pointer',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 18,
                'nombre' => 'Help',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 18,
                'nombre' => 'None',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 18,
                'nombre' => 'Move',
                'correcta' => false,
            ],
        ];
        // ¿Qué es CSS flexbox?
        $pregunta19 = [
            [
                'preguntas_id' => 19,
                'nombre' => 'Es un modelo de diseño.​',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 19,
                'nombre' => 'Es un framework de diseño.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 19,
                'nombre' => 'Es un lenguaje de programacion.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 19,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Un elemento de html tiene id y clase. El id (tiene la propiedad: \'color\': #000) y la clase (tiene la propiedad: \'color\': #fff). Cual tiene prioridad?
        $pregunta20 = [
            [
                'preguntas_id' => 20,
                'nombre' => 'El id tiene mas prioridad.​',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 20,
                'nombre' => 'La clase tiene mas prioridad.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 20,
                'nombre' => 'Ninguna de las anteriores.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 20,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Que es Angular?
        $pregunta21 = [
            [
                'preguntas_id' => 21,
                'nombre' => 'Angular es un front-end de código abierto basado en TypeScript que facilita la creación de aplicaciones en la web / móvil y de escritorio. ​',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 21,
                'nombre' => 'Angular es un front-end de código abierto basado en JavaScript que facilita la creación de aplicaciones en la web / móvil y de escritorio. ​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 21,
                'nombre' => 'Todas las anteriores.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 21,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Angular JS es igual a Angular?
        $pregunta22 = [
            [
                'preguntas_id' => 22,
                'nombre' => 'Si, ya que Angular esta basado en el patrón MVC.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 22,
                'nombre' => 'Si, ya que Angular JS esta basado en el patrón Service / Controller.​​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 22,
                'nombre' => 'No, ya que Angular esta basado​ JavaScript',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 22,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Que es Angular CLI?
        $pregunta23 = [
            [
                'preguntas_id' => 23,
                'nombre' => 'Es una interfaz grafica, ayuda ha montar y construir aplicaciones de Angular.​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 23,
                'nombre' => 'Es una interfaz de línea de comando para montar y construir aplicaciones de Angular.​​',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 23,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 23,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Que es un componente en Angular?
        $pregunta24 = [
            [
                'preguntas_id' => 24,
                'nombre' => 'Un componente controla un parte de pantalla, llamado vista.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 24,
                'nombre' => 'Un componente controla un parte de pantalla, llamado servicio.​​',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 24,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 24,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // ¿Que es un servicio en Angular?
        $pregunta25 = [
            [
                'preguntas_id' => 25,
                'nombre' => 'Un servicio es la capa encargada de traer/proporcionarnos los datos a nuestra aplicación de Angular.',
                'correcta' => true,
            ],
            [
                'preguntas_id' => 25,
                'nombre' => 'Un servicio es la capa encargada de mostrar las vistas de nuestra aplicación de Angular.',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 25,
                'nombre' => 'Todas las anteriores',
                'correcta' => false,
            ],
            [
                'preguntas_id' => 25,
                'nombre' => 'Ninguna de las anteriores',
                'correcta' => false,
            ],
        ];
        // Se unen los arrays
        $respuestas = array_merge(
            $pregunta1,
            $pregunta2,
            $pregunta3,
            $pregunta4,
            $pregunta5,
            $pregunta6,
            $pregunta7,
            $pregunta8,
            $pregunta9,
            $pregunta10,
            $pregunta11,
            $pregunta12,
            $pregunta13,
            $pregunta14,
            $pregunta15,
            $pregunta16,
            $pregunta17,
            $pregunta18,
            $pregunta19,
            $pregunta20,
            $pregunta21,
            $pregunta22,
            $pregunta23,
            $pregunta24,
            $pregunta25,
        );
        foreach ($respuestas as $value) {
            Opcion::create([
                'nombre' => $value['nombre'],
                'correcta' => $value['correcta'],
                'preguntas_id' => $value['preguntas_id'],
            ]);
        }
    }
}