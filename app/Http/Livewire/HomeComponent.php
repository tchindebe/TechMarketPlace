<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::where('SKU', 1)->get();
        $promo = Product::where('SKU', 2)->get();
        return view('livewire.home-component')->layout('layouts.base')
            ->with('promo', $promo)
            ->with('products', $products);
    }
}
