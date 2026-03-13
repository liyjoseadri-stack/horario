<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMobiliarioRequest;
use App\Http\Requests\UpdateMobiliarioRequest;
use App\Models\Mobiliario;

class MobiliarioController extends Controller
{
    public function index()
    {
        return response()->json(Mobiliario::with('aula')->get());
    }

    public function store(StoreMobiliarioRequest $request)
    {
        $mobiliario = Mobiliario::create($request->all());
        return response()->json($mobiliario, 201);
    }

    public function show(Mobiliario $mobiliario)
    {
        $mobiliario->load('aula');
        return response()->json($mobiliario);
    }

    public function update(UpdateMobiliarioRequest $request, Mobiliario $mobiliario)
    {
        $mobiliario->update($request->all());
        return response()->json($mobiliario);
    }

    public function destroy(Mobiliario $mobiliario)
    {
        $mobiliario->delete();
        return response()->json(['message' => 'Mobiliario eliminado']);
    }
}