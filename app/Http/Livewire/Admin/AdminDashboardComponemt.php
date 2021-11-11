<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponemt extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-componemt')->layout('layouts.base');
    }
}
