<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index()
    {
        return response()->json(Aula::with('edificio')->get());
    }

    public function store(StoreAulaRequest $request)
    {
        $aula = Aula::create($request->all());
        return response()->json($aula, 201);
    }

    public function show(Aula $aula)
    {
        $aula->load('edificio');
        return response()->json($aula);
    }

    public function update(UpdateAulaRequest $request, Aula $aula)
    {
        $aula->update($request->all());
        return response()->json($aula);
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();
        return response()->json(['message' => 'Aula eliminada']);
    }
}