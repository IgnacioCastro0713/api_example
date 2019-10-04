<?php


namespace App\Repositories\Trainer;


interface TrainerRepositoryInterface
{
    public function all();

    public function getById($id);

    public function save($data);

    public function update($data, $id);

    public function delete($id);
}
