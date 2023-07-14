<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Interfaces\TodoRepositoryInterface;

class TodoRepository implements TodoRepositoryInterface
{

    public function create(array $data)
    {
        return Todo::create($data);
    }

    public function getAll()
    {
        return Todo::all();
    }

    public function getById($id)
    {
        return Todo::findorFail($id);
    }
    public function delete($id)
    {
        //dd( Todo::findorFail($id));
        $todo = Todo::findorFail($id);
        if ($todo) {
            return $todo->delete($id);
        }
    }

    public function update($id, array $data)
    {
        //dd(Todo::findorFail($id));
        $todo = Todo::findorFail($id);
    }
}
