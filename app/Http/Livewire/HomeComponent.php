<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

class HomeComponent extends Component
{
    public function render()
    {
        $users = User::where('user_type', 'Boutique')
            ->where('account_status', 'Approved')
            ->get();
        $products = Product::where('SKU', 1)->get();
        $promo = Product::where('SKU', 2)->get();
        $lowProduct = Product::where('SKU', 3)->get();
        $others = Product::where('SKU', 4)->get();
        $sponsored = Product::where('sponsored', 1)->get();

        return view('livewire.home-component', compact('sponsored'))->layout('layouts.base')
            ->with('promo', $promo)
            ->with('users', $users)
            ->with('others', $others)
            ->with('lowProduct', $lowProduct)
            ->with('products', $products);
    }
}
