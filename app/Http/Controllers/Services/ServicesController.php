<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('livewire.services.my-profile');
    }
}
