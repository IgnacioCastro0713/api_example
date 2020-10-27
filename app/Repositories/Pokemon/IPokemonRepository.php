<?php


namespace App\Repositories\Pokemon;


interface IPokemonRepository
{
    public function all();

    public function find($id);

    public function save(array $data);

    public function update(array $data, $id);

    public function delete($id);
}
