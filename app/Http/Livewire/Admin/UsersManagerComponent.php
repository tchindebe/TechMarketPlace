<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsersManagerComponent extends Component
{
    public function render()
    {
        $user = User::paginate(10);

        return view('livewire.admin.users-manager-component')
            ->layout('layouts.app')
            ->with('users', $user);
    }
}
