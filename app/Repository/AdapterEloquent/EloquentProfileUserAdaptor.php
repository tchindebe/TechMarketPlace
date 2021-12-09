<?php

namespace App\Repository\AdapterEloquent;

use App\Models\Profile;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class EloquentProfileUserAdaptor implements UserRepositoryInterface
{
    public function getById(int $id)
    {
        $profile = Profile::where('user_id', Auth::user()->id)->firstOrFail();

        return $profile;
    }

    public function update(array $data)
    {
        $profile = Profile::where('id', Auth::user()->id)->firstOrFail();
        $logaPath = $data['logo']->store('LogoShop', 'public');

        $profile->update([
            'country' => $data['country'],
            'city' => $data['city'],
            'phone' => $data['phone'],
            'description' => $data['description'],
            'slogan' => $data['slogan'],
            'bp' => $data['bp'],
            'logo' => $logaPath
        ]);

        return $profile;
    }

}
