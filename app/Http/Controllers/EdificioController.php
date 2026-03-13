<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use App\Http\Requests\StoreEdificioRequest;
use App\Http\Requests\UpdateEdificioRequest;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEdificioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource along with its aulas.
     */
    public function show(Edificio $edificio)
    {
        // Carga las aulas relacionadas
        $edificio->load('aulas');

        // Retorna el edificio con sus aulas en JSON
        return response()->json($edificio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEdificioRequest $request, Edificio $edificio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        //
    }
}