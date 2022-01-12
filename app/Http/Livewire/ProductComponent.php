<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class ProductComponent extends Component
{

    public function render(Request $request, Product $product)
    {
        if($product->active === 'instock') {
            return view('product.show', compact('product'));
        }

        return redirect(route('home'));
    }
}
