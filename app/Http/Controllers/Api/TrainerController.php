<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainer\StoreRequest;
use App\Http\Requests\Trainer\UpdateRequest;
use App\Repositories\Trainer\TrainerRepositoryInterface;

class TrainerController extends Controller
{
    private $trainer;

    public function __construct(TrainerRepositoryInterface $trainerRepository)
    {
        $this->trainer = $trainerRepository;
    }

    public function index()
    {
        return $this->trainer->all();
    }

    public function store(StoreRequest $request)
    {
        $this->trainer->save($request->all());
    }

    public function show($id)
    {
        return $this->trainer->getById($id);
    }

    public function update(UpdateRequest $request, $id)
    {
        $this->trainer->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->trainer->delete($id);
    }
}
