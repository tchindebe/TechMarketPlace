<?php

namespace App\Http\Controllers\ProfileCustomers;

use App\Http\Controllers\Controller;
use App\Http\Request\ProfileUserRequest;
use App\Repository\ProfileCustomers\AdaptorEloquentRequest\ProfilEloquent;
use App\Repository\ProfileCustomers\ProfilRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfileUser(ProfilRepositoryInterface $repository, $id)
    {
        $profile = $repository->getById($id);

        return view('user.customers.profile', compact('profile', $profile));
    }

    /**
     * @param ProfilEloquent $request
     * @param  ProfilRepositoryInterface $repository
     **/

    public function update(ProfileUserRequest $request, ProfilRepositoryInterface $repository)
    {
        $data = $request->all();
        $profile = $repository->update($data);

        if ($profile)
        {
            return redirect()->back()->with('success', "Your profile has been successfully edited");
        }
        return redirect()->back()->with('error', "an error occurred please try again");
    }
}
