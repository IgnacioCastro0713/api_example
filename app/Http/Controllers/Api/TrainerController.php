<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Trainer\TrainerRepositoryInterface;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->trainer->save($request->all());
    }

    public function show($id)
    {
        return $this->trainer->getById($id);
    }

    public function update(Request $request, $id)
    {
        $this->trainer->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->trainer->delete($id);
    }
}
