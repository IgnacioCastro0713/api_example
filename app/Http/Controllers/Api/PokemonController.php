<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return response()->json(Pokemon::all());
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
        //
    }

    public function destroy($id)
    {
        Pokemon::find($id)->delete();
    }
}
