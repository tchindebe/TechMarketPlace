<?php

namespace App\Repository;

use App\Models\Profile;
use App\Models\User;

interface UserRepositoryInterface
{
    public function getById(int $id);
    public function update(array $data);
}
