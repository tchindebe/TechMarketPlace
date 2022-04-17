<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $users = User::where('user_type', 'Boutique')->get();
        $products = Product::where('SKU', 1)->get();
        $promo = Product::where('SKU', 2)->get();
        $lowProduct = Product::where('SKU', 3)->get();
        $others = Product::where('SKU', 4)->get();
        return view('livewire.home-component')->layout('layouts.base')
            ->with('promo', $promo)
            ->with('users', $users)
            ->with('others', $others)
            ->with('lowProduct', $lowProduct)
            ->with('products', $products);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
