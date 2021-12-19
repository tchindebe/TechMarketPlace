<?php

namespace App\Http\Livewire\User;

use App\Repository\Admin\Orders\OrderInterfaceRepository;
use App\Repository\Orders\OrderRepositoryInterface;
use Livewire\Component;

class UserDashboardComponemt extends Component
{
    public function render(OrderInterfaceRepository $repository)
    {
        $order = $repository->show();
        return view('livewire.user.user-dashboard-componemt', compact('order', $order))->layout('layouts.adminShop');
    }
}
