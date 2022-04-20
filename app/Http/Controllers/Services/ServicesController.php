<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        return view('livewire.services.index');
    }


    public function profile()
    {
        return view('livewire.services.profile');
    }


    public function user_profile()
    {
        $user_posts = DB::table('posts')->where('author', Auth::user()->id)->get();
//        dd($user_posts);
        return view('livewire.services.my-profile')
            ->with('user_post', $user_posts);
    }
}
