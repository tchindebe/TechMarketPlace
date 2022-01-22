<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class ProductComponent extends Component
{

    public function render()
    {
            return view('livewire.product-component')->layout('layouts.guest');
    }
}
