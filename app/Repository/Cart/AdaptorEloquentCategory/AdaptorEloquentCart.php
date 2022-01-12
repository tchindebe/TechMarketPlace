<?php

namespace App\Repository\Cart\AdaptorEloquentCart;

use App\Models\Category;
use App\Repository\Category\CartRepositoryInterface;
use App\Repository\Category\CategoryRepositoryInterface;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;

class AdaptorEloquentCart implements CartRepositoryInterface
{
    public function cartList()
    {
        $cartItems = Cart::getContent();

        return $cartItems;
    }

    public function addToCart(array $data)
    {
        Cart::add([
            'id' => $data->id,
            'name' => $data->name,
            'price' => $data->price,
            'quantity' => $data->quantity,
            'attributes' => array(
                'image' => $data->image,
            )
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(array $data)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');           
    }

    public function removeCart($id)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
