<?php

namespace App\Http\Controllers;

use App\Http\Request\ProfileUserRequest;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class ProfileController
{

    public function showProfileUser(UserRepositoryInterface $repository, $id)
    {
        $profile = $repository->getById($id);

        return view('user.profile', compact('profile', $profile))->layout('layouts.app');
    }

    /**
     * @param ProfileUserRequest $request
     * @param  UserRepositoryInterface $repository
    **/

    public function update(ProfileUserRequest $request, UserRepositoryInterface $repository)
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
