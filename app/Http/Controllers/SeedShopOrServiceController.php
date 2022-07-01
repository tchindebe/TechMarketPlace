<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SeedShopOrServiceController extends Controller
{
    public function show(User $user)
    {
        if ($user->user_type == "Service"){
            return view('user.service', compact('user', $user))->layout('layouts.base');
        }elseif ($user->user_type == "Client"){
            return view('/', compact('user', $user));
        }else{
            if ($user->account_status == "Approved"){
                return view('user.shop', compact('user', $user))->layout('layouts.base');
            }
            return redirect()->back()->with('success', "This shop is not exit ! ");
        }
    }
}
