<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Livewire\Component;

class CartComponent extends Component
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $product = Product::findOrFail($request->id);

        Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'sale_price' => $product->price,
                'quantity' => $request->quantity,
                'featured' => [],
                'associatedModel' => $product,
            ]
        );

        return redirect()->back();
    }
    public function render()
    {
        $content = Cart::getContent();
        $total = Cart::getTotal();
        return view('livewire.cart-component')
            ->with('total', $total)
            ->with('content', $content)
            ->layout('layouts.guest');
    }
}
