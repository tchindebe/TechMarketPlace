<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\Category\CartRepositoryInterface;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Cart::getContent();

        $total = $content->count();

//        dd($content);

        return view('livewire.cart-component')
            ->with('content', $content)
            ->with('total', $total);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::findOrFail($request->id);

        Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->sale_price,
                'quantity' => $request->quantity,
                'featured' => [],
                'associatedModel' => $product,
            ]
        );

        return redirect()->back()->with('cart', 'Your Product add to cart successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => ['relative' => false, 'value' => $request->quantity],
        ]);

        return redirect(route('cart.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        Cart::remove($id);

        return redirect(route('cart.index'));
    }
}
