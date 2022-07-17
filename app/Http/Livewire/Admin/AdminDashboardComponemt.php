<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminDashboardComponemt extends Component
{
    public function render()
    {
        $user = User::all()->count();
        return view('livewire.admin.admin-dashboard-componemt')
            ->with('usersCount', $user)
            ->layout('layouts.app');
    }
}
