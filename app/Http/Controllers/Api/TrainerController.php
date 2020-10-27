<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\StoreRequest;
use App\Http\Requests\Trainer\UpdateRequest;
use App\Repositories\Trainer\ITrainerRepository;

class TrainerController extends Controller
{
    private ITrainerRepository $trainerRepository;

    public function __construct(ITrainerRepository $trainerRepository)
    {
        $this->trainerRepository = $trainerRepository;
    }

    public function index()
    {
        return $this->trainerRepository->all();
    }

    public function store(StoreRequest $request)
    {
        $this->trainerRepository->save($request->all());
    }

    public function show($id)
    {
        return $this->trainerRepository->find($id);
    }

    public function update(UpdateRequest $request, $id)
    {
        $this->trainerRepository->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->trainerRepository->delete($id);
    }
}
