<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Intento;
use App\Models\Jugador;
use App\Models\Opcion;
use App\Models\Pregunta;
use App\Models\Premio;
use App\Models\RondaPreguntaIntento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// max() sql

class IntentoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function consultaPreparada($id)
    {
        return Intento::where('jugadores_id', $id)
        ->whereHas('rondaPreguntaIntentos', function ($query) {
            $query->where('opciones_id', null);
        })
        ->with([
            'rondaPreguntaIntentos' => function ($query) {
                $query
                ->where('opciones_id', null)
                ->with([
                    'preguntas' => function ($_query) {
                        $_query
                        ->with([
                            'opciones' => function ($__query) {
                                $__query
                                ->select('id','nombre','preguntas_id');
                            },
                        ])
                        ->select('id','nombre');
                    },
                    'rondas' => function ($_query) {
                        $_query
                        ->select('id','nombre');
                    }
                ])
                ->select('id','preguntas_id','rondas_id','intentos_id');
            }
        ])
        ->first();
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $idJugador = Jugador::where([
                ['nombre', $request['nombre']]
            ])
            ->first();
            $jugador = $this->consultaPreparada($idJugador->id);
            if ($jugador) {
                return response()->json($jugador->rondaPreguntaIntentos[0]);
            }
            $intento = Intento::create([
                'jugadores_id' => $idJugador->id,
            ]);
            $pregunta = Pregunta::where('categorias_id', 1)
            ->with('opciones')
            ->get();
            $random = rand(0,4);
            $jugador = RondaPreguntaIntento::create([
                'preguntas_id' => $pregunta[$random]['id'],
                'rondas_id' => 1,
                'intentos_id' => $intento->id,
                'opciones_id' => null,
            ]);
            $jugador = $this->consultaPreparada($idJugador->id);
            DB::commit();
            return response()->json($jugador->rondaPreguntaIntentos[0]);
        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function respuesta(Request $request)
    {
        try {
            DB::beginTransaction();
            $opcion = Opcion::where('id', $request['respuesta_id'])
            ->first();
            $rondaPreguntaIntento = RondaPreguntaIntento::where('id', $request['id'])
            ->with('intentos')
            ->first();
            $rondaPreguntaIntento->update([
                'opciones_id' => $request['respuesta_id'],
            ]);
            $idJugador = $rondaPreguntaIntento->intentos->jugadores_id;
            if ($opcion->correcta) {
                if ($rondaPreguntaIntento->rondas_id < 5) {
                    $pregunta = Pregunta::where('categorias_id', $rondaPreguntaIntento->rondas_id+1)
                    ->with('opciones')
                    ->get();
                    $random = rand(0,4);
                    RondaPreguntaIntento::create([
                        'preguntas_id' => $pregunta[$random]['id'],
                        'rondas_id' => $rondaPreguntaIntento->rondas_id+1,
                        'intentos_id' => $rondaPreguntaIntento->intentos_id,
                        'opciones_id' => null,
                    ]);
                    $pregunta = $this->consultaPreparada($idJugador);
                    DB::commit();
                    return response()->json([
                        'termino' => false,
                        'pregunta' => $pregunta->rondaPreguntaIntentos[0],
                    ]);
                }
                Premio::create([
                    'jugadores_id' => $rondaPreguntaIntento->intentos->jugadores_id,
                    'ronda_pregunta_intentos_id' => $rondaPreguntaIntento->id,
                    'puntuacion' => $rondaPreguntaIntento->rondas_id*10,
                    'termino' => true,
                ]);
                DB::commit();
                return response()->json([
                    'res' => true,
                    'termino' => true,
                ]);
            }
            DB::commit();
            return response()->json([
                'res' => false,
                'termino' => true,
            ]);
        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function salir(Request $request)
    {
        try {
            DB::beginTransaction();
            $opcion = Opcion::where([
                ['preguntas_id', $request['idPregunta']],
                ['correcta', false],
            ])
            ->first();
            $rondaPreguntaIntento = RondaPreguntaIntento::where('id', $request['id'])
            ->with('intentos')
            ->first();
            $rondaPreguntaIntento->update([
                'opciones_id' => $opcion->id,
            ]);
            $puntuacion = $rondaPreguntaIntento->rondas_id == 1 ?  0 : ($rondaPreguntaIntento->rondas_id-1)*10;
            Premio::create([
                'jugadores_id' => $rondaPreguntaIntento->intentos->jugadores_id,
                'ronda_pregunta_intentos_id' => $rondaPreguntaIntento->id,
                'puntuacion' => $puntuacion,
                'termino' => false,
            ]);
            DB::commit();
            return response()->json('se actualizo el registro');
        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
