<?php


namespace App\Repositories\Trainer;


use App\Trainer;

class TrainerRepository implements TrainerRepositoryInterface
{

    public function all()
    {
        return Trainer::all();
    }

    public function getById($id)
    {
        return Trainer::find($id);
    }

    public function save($data)
    {
        Trainer::create($data);
    }

    public function update($data, $id)
    {
        $this->getById($id)->update($data);
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
    }
}
