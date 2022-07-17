<?php


namespace App\Http\Livewire\Admin;


use App\Models\Product;
use App\Models\Subcription_stripe;
use Livewire\Component;

class PaymentManagerComponent extends Component
{
    public function sponsored(){

        $sponsored = Product::join('product_sponsoreds', 'products.id', '=', 'product_sponsoreds.product_id')
            ->orderBy('product_sponsoreds.id', 'desc')
            ->get();

        return view('livewire.admin.payments.sponsored', compact('sponsored'))->layout('layouts.app');
    }

    public function shop(){
        $userPayments =Subcription_stripe::orderBy('.id', 'desc')->get();

        return view('livewire.admin.payments.shop', compact('userPayments'))->layout('layouts.app');
    }
}
