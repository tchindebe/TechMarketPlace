<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UsersManagerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.users-manager-component')->layout('layouts.app');
    }
}
