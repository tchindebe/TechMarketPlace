<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Repository\Admin\Orders\OrderInterfaceRepository;
use App\Repository\Orders\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponemt extends Component
{
    public function render(OrderInterfaceRepository $repository)
    {
        $order = $repository->show();

        $ordersByClient = $repository->showByClient(Auth::User()->id);

        return view('livewire.user.user-dashboard-componemt', compact('order', $order))
            ->with('ordersByClient', $ordersByClient)
            ->layout('layouts.adminShop');
    }

    public function showByBill($bill,$subtotal, OrderInterfaceRepository $repository){
        $orders = $repository->showByBill($bill);

        if($orders){
            return view('livewire.orders.ordersByBill', compact('orders', $orders))
                ->with('subtotal', $subtotal)
                ->with('bill', $bill);
        }

    }

    public function validateOrderCustomer($billNumber, OrderInterfaceRepository $repository){

        $response = $repository->validateOrderCustomer($billNumber);

        if ($response)
        {
            return redirect()->back()->with('success', "Your orders has been successfully aprouve");
        }
        return redirect()->back()->with('error', "an error occurred please try again");

    }
}
