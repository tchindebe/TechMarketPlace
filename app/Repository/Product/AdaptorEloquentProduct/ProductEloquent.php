<?php

namespace App\Repository\Product\AdaptorEloquentProduct;

use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProductEloquent implements ProductRepositoryInterface
{
    public function create(array $data)
    {
        if ($data['regular_price'] >= $data['sale_price'])
        {
            $image1 = $data['image1']->store('img/shop/product', 'public');
            $image2 = $data['image2']->store('img/shop/product', 'public');

            $product = Product::create([
                'name' => $data['name'],
                'slug' => $data['slug'],
                'regular_price' => $data['regular_price'],
                'sale_price' => $data['sale_price'],
                'quantity' => $data['quantity'],
                'image' => $image1,
                'images' => $image2,
                'short_description' => $data['short_description'],
                'description' => $data['description'],
                'category_id' => $data['category'],
                'user_id' => Auth::user()->id,
            ]);

            return $product;
        }
        return false;

    }

    public function getById(int $id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        return $product;
    }

    public function update(array $data)
    {
        if ($data['regular_price'] >= $data['sale_price'])
        {
            $product = Product::where('id', $data['id'])->firstOrFail();

            if ($data['image1'] != null && $data['image2'] != null)
            {
                $image1 = $data['image1']->store('img/shop/product', 'public');
                $image2 = $data['image2']->store('img/shop/product', 'public');

                $product->update([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'regular_price' => $data['regular_price'],
                    'sale_price' => $data['sale_price'],
                    'quantity' => $data['quantity'],
                    'image' => $image1,
                    'images' => $image2,
                    'short_description' => $data['short_description'],
                    'description' => $data['description'],
                    'category_id' => $data['category'],
                    'user_id' => Auth::user()->id,
                ]);

                return $product;
            }

            if ($data['image1'] == null && $data['image2'] == null)
            {
                $product->update([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'regular_price' => $data['regular_price'],
                    'sale_price' => $data['sale_price'],
                    'quantity' => $data['quantity'],
                    'short_description' => $data['short_description'],
                    'description' => $data['description'],
                    'category_id' => $data['category'],
                    'user_id' => Auth::user()->id,
                ]);

                return $product;
            }

            if ($data['image1'] != null)
            {
                $image1 = $data['image1']->store('img/shop/product', 'public');
                $product->update([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'regular_price' => $data['regular_price'],
                    'sale_price' => $data['sale_price'],
                    'quantity' => $data['quantity'],
                    'image' => $image1,
                    'short_description' => $data['short_description'],
                    'description' => $data['description'],
                    'category_id' => $data['category'],
                    'user_id' => Auth::user()->id,
                ]);

                return $product;
            }

            if ($data['image2'] != null)
            {
                $image2 = $data['image2']->store('img/shop/product', 'public');
                $product->update([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'regular_price' => $data['regular_price'],
                    'sale_price' => $data['sale_price'],
                    'quantity' => $data['quantity'],
                    'images' => $image2,
                    'short_description' => $data['short_description'],
                    'description' => $data['description'],
                    'category_id' => $data['category'],
                    'user_id' => Auth::user()->id,
                ]);

                return $product;
            }
        }

    }

    public function delete(int $id)
    {
        $product = Product::where('id', $id)->where('user_id', Auth::user()->id)->firstOrFail();
        Product::destroy($product->id);

        return true;
    }
}
