<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashboardComponemt extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashboard-componemt')->layout('layouts.base');
    }
}
