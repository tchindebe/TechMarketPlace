<?php


namespace App\Repository\UserRepository;


use App\Models\User;

interface UserInterfaceRepository
{
    public function getById(int $id): ?User;
    public function getUserByIdAndByType(int $id, string $type);

}
