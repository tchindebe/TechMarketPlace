<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index(){

        $users = User::where('user_type', 'Boutique')
                ->where('account_status', 'Approved')
                ->get();

        return view('Store.index', compact('users'));
    }
}
