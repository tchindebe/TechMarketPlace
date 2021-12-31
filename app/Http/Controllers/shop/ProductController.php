<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductRepositoryInterface $repository, $id)
    {
        $product = $repository->getById($id);
        $allProducts = $repository->allproduct();

        return view('user.shop.product.detailProduct', compact('product', $product))->with('allProducts', $allProducts);
    }

    public function show(ProductRepositoryInterface $repository, CategoryRepositoryInterface $categoryRepository, $id)
    {
        $product = $repository->show($id);
        $products = $repository->allProduct($id);
        $category = $categoryRepository->fetById($id);

        if ($product && $category)
        {
            return view('user.shop.product.productCategory', compact('product', $product))
                ->with('products', $products)
                ->with('category', $category);
        }
    }

}
