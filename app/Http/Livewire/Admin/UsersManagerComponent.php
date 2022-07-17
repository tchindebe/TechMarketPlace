<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class UsersManagerComponent extends Component
{
    public function render()
    {
        $user = \App\Models\User::paginate(5);
        return view('livewire.admin.users-manager-component')
            ->with('users', $user)
            ->layout('layouts.app');
    }

    public function shop()
    {
        $user = DB::table('users')->where('user_type', '=', 'Boutique')->paginate(10);
        return view('livewire.admin.users-manager-component')
            ->with('users', $user)
            ->layout('layouts.app');
    }

    public function customer()
    {
        $user = DB::table('users')->where('user_type', '=', 'Client')->paginate(10);
        return view('livewire.admin.users-manager-component')
            ->with('users', $user)
            ->layout('layouts.app');
    }

    public function service()
    {
        $user = DB::table('users')->where('user_type', '=', 'Service')->paginate(10);
        return view('livewire.admin.users-manager-component')
            ->with('users', $user)
            ->layout('layouts.app');
    }

    public function update_status($id, $status)
    {
        User::where('id', $id)
            ->first()
            ->update([
                'account_status' => $status
            ]);

        return redirect()->back()->with('success', "The user has been successfully ".$status);
    }

}
