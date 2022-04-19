<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponemt extends Component
{
    public function render()
    {
        $user = \App\Models\User::all()->count();
        return view('livewire.admin.admin-dashboard-componemt')
            ->with('usersCount', $user)
            ->layout('layouts.app');
    }
}
