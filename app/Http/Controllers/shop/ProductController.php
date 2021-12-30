<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductRepositoryInterface $repository, $id)
    {
        $product = $repository->getById($id);

        return view('user.shop.product.detailProduct', compact('product', $product));
    }
}
