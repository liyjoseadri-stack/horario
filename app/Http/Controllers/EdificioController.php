<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use App\Http\Requests\StoreEdificioRequest;
use App\Http\Requests\UpdateEdificioRequest;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public function index()
    {
        $edificios = Edificio::with('aulas')->get();
        return response()->json($edificios);
    }

    public function store(StoreEdificioRequest $request)
    {
        $edificio = Edificio::create($request->all());
        return response()->json($edificio, 201);
    }

    public function show(Edificio $edificio)
    {
        $edificio->load('aulas');
        return response()->json($edificio);
    }

    public function update(UpdateEdificioRequest $request, Edificio $edificio)
    {
        $edificio->update($request->all());
        return response()->json($edificio);
    }

    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return response()->json(['message' => 'Edificio eliminado']);
    }
}