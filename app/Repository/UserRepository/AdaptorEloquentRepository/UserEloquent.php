<?php


namespace App\Repository\UserRepository\AdaptorEloquentRepository;


use App\Models\User;
use App\Repository\UserRepository\UserInterfaceRepository;
use Illuminate\Support\Facades\Auth;

class UserEloquent implements UserInterfaceRepository
{
    public function getById(int $id): ?User
    {
        $user = User::where('id', $id)->firstOrFail();

        return $user;
    }

    public function getUserByIdAndByType(int $id, string $type)
    {
        $users = User::where('id', '!=', $id)
            ->where('user_type', $type)->get();

        return $users;
    }
}
