<?php

namespace App\Interfaces;

interface TodoRepositoryInterface
{
    public function create(array $data);

    public function getById($id);

    public function getAll();

    public function delete($id);

    public function update($id, array $data);
}
