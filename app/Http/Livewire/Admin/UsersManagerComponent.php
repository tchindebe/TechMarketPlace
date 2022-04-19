<?php

namespace App\Http\Livewire\Admin;

use http\Client\Curl\User;
use Livewire\Component;

class UsersManagerComponent extends Component
{
    public function render()
    {
        $user = \App\Models\User::all();
        return view('livewire.admin.users-manager-component')
            ->with('users', $user)
            ->layout('layouts.app');
    }
}
