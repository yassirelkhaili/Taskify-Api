<?php

namespace App\Repositories;

interface TaskRepositoryInterface
{
    public function getById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function getAll();
}