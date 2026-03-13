<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Trae todos los edificios con sus aulas
        $edificios = Edificio::with('aulas')->get();
        return response()->json($edificios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación simple
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        // Crear nuevo edificio
        $edificio = new Edificio();
        $edificio->fill($request->all());
        $edificio->save();

        // Retornar JSON con el edificio creado
        return response()->json($edificio, 201);
    }

    /**
     * Display the specified resource along with its aulas.
     */
    public function show(Edificio $edificio)
    {
        $edificio->load('aulas');
        return response()->json($edificio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edificio $edificio)
    {
        // Validación simple
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $edificio->fill($request->all());
        $edificio->save();

        return response()->json($edificio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return response()->json([
            'message' => 'Edificio eliminado correctamente'
        ]);
    }
}