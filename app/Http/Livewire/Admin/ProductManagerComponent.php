<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductManagerComponent extends Component
{
    public function render()
    {
        $allProducts = Product::paginate(15);

        return view('livewire.admin.product-manager-component')->with('allProducts', $allProducts)->layout('layouts.app');
    }
}
