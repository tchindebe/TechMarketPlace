<?php

namespace App\Http\Livewire\User;

use App\Repository\Orders\OrderRepositoryInterface;
use Livewire\Component;

class UserDashboardComponemt extends Component
{
    public function render(OrderRepositoryInterface $repository)
    {
        $order = $repository->show();
        return view('livewire.user.user-dashboard-componemt', compact('order', $order))->layout('layouts.adminShop');
    }
}
