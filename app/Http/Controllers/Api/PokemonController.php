<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return response()->json($pokemons);
    }

    public function store(Request $request)
    {
        Pokemon::create($request->all());
    }

    public function show($id)
    {
        $pokemon = Pokemon::find(id);
        return response()->json($pokemon);
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->update($request->all());
    }

    public function destroy($id)
    {
        Pokemon::find($id)->delete();
    }
}
