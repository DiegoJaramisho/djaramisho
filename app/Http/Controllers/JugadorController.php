<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jugador;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JugadorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $jugador = Jugador::where([
                ['nombre', $request['nombre']]
            ])
            ->select('id','nombre')
            ->first();
            if ($jugador) {
                return response()->json($jugador);
            }
            $jugador = Jugador::create([
                'nombre' => $request['nombre']
            ]);
            $jugador = Jugador::where('id', $jugador->id)
            ->select('id','nombre')
            ->first();
            DB::commit();
            return response()->json($jugador);
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
