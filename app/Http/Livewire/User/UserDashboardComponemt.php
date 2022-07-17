<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use App\Repository\Admin\Orders\OrderInterfaceRepository;
use App\Repository\Orders\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponemt extends Component
{
    private $orderInterfaceRepository;
    public function __construct(OrderInterfaceRepository $orderInterfaceRepository)
    {
        $this->orderInterfaceRepository = $orderInterfaceRepository;
    }

    public function render()
    {
        if (Auth::user()->account_status == "Approved"){
            $order = $this->orderInterfaceRepository->show();

            $ordersByClient = $this->orderInterfaceRepository->showByClient(Auth::User()->id);

            return view('livewire.user.user-dashboard-componemt', compact('order', $order))
                ->with('ordersByClient', $ordersByClient)
                ->layout('layouts.adminShop');
        }elseif (Auth::user()->account_status == "Pending"){
            return view('IsInvalid.pending')->layout('layouts.base');
        }else{
            return view('IsInvalid.disable')->layout('layouts.base');
        }

    }

    public function showByBill($bill,$subtotal){
        $orders = $this->orderInterfaceRepository->showByBill($bill);

        if($orders){
            return view('livewire.orders.ordersByBill', compact('orders', $orders))
                ->with('subtotal', $subtotal)
                ->with('bill', $bill);
        }

    }

    public function validateOrderCustomer($billNumber){

        $response = $this->orderInterfaceRepository->validateOrderCustomer($billNumber);

        if ($response)
        {
            return redirect()->back()->with('success', "Your orders has been successfully aprouve");
        }
        return redirect()->back()->with('error', "an error occurred please try again");
    }
}
