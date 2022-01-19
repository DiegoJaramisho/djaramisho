<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Premio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PremioController extends Controller
{
    public function index()
    {
        try {
            return response()->json(
                Premio::select('jugadores_id', 'puntuacion')
                ->with([
                    'jugadores' => function ($query) {
                        $query->select('id','nombre');
                    }
                ])
                ->groupByRaw('jugadores_id, puntuacion')
                ->orderBy('puntuacion', 'desc')
                ->take(5)
                ->get()
            );
        } catch (QueryException $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // 
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
