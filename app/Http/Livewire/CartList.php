<?php

namespace App\Http\Livewire;

use Cart;
use Livewire\Component;

class CartList extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];
    public $cartItems = [];

    public function removeCart($id)
    {
        Cart::remove($id);

        session()->flash('success', 'Item has removed !');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');
    }
    public function render()
    {
        return view('livewire.cart-list')->layout('layouts.guest');
    }
}
