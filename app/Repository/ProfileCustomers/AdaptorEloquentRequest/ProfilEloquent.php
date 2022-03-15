<?php

namespace App\Repository\ProfileCustomers\AdaptorEloquentRequest;

use App\Models\Profile;
use App\Repository\ProfileCustomers\ProfilRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProfilEloquent implements ProfilRepositoryInterface {

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
            'bp' => $data['bp'],
            'logo' => $logaPath
        ]);

        return $profile;
    }
}
