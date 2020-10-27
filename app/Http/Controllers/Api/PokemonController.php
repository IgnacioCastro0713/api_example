<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pokemon\StoreRequest;
use App\Http\Requests\Pokemon\UpdateRequest;
use App\Pokemon;
use App\Repositories\Pokemon\IPokemonRepository;

class PokemonController extends Controller
{
    private IPokemonRepository $pokemonRepository;

    public function __construct(IPokemonRepository $pokemonRepository)
    {
        $this->pokemonRepository = $pokemonRepository;
    }

    public function index()
    {
        return $this->pokemonRepository->all();
    }

    public function store(StoreRequest $request)
    {
        return $this->pokemonRepository->save($request->all());
    }

    public function show($id)
    {
        $pokemon = $this->pokemonRepository->find($id);
        return $pokemon ? response()->json($pokemon) : response()->json(['message' => "not found"], 404);
    }

    public function update(UpdateRequest $request, $id)
    {
        return $this->pokemonRepository->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->pokemonRepository->delete($id);
    }
}
