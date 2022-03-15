<?php

namespace App\Http\Controllers;

use App\Http\Request\OrderRequest;
use App\Repository\Orders\OrderRepositoryInterface;
use Cart;

class CheckoutController extends Controller
{
    public function index(){

        $content = Cart::getContent();
        $total = Cart::getTotal();
        $subTotal = Cart::getSubTotal();

        return view('livewire.checkout', compact('content', $content), compact( 'total', $total))->with('subTotal', $subTotal);
    }

    public function thank(){
        return view('livewire.thankyou');
    }

    public function store(OrderRequest $request, OrderRepositoryInterface $repository){
        $data = $request->all();

        $order = $repository->store($data);

        if ($order){
            return view('livewire.thankyou');
        }

        return redirect();
    }
}
