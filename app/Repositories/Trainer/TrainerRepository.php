<?php


namespace App\Repositories\Trainer;


use App\Trainer;

class TrainerRepository implements ITrainerRepository
{
    private Trainer $model;

    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function save(array $data)
    {
        $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $this->find($id)->update($data);
    }

    public function delete($id)
    {
        $this->find($id)->delete();
    }
}
