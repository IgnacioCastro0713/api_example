<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pokemon\StoreRequest;
use App\Http\Requests\Pokemon\UpdateRequest;
use App\Pokemon;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return response()->json($pokemons);
    }

    public function store(StoreRequest $request)
    {
        Pokemon::create($request->all());
    }

    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        return response()->json($pokemon);
    }

    public function update(UpdateRequest $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->update($request->all());
    }

    public function destroy($id)
    {
        Pokemon::find($id)->delete();
    }
}
