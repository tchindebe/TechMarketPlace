<?php

namespace App\Repository;

interface UserRepositoryInterface
{
    public function getById(int $id);
    public function update(array $data);
}
