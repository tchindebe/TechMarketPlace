<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Request\ProductRequest;
use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController
{
    public function index()
    {
        return view('user.product.index');
    }

    public function create()
    {
        return view('user.product.create');
    }

    public function show(ProductRepositoryInterface $repository, $id)
    {
        $product = $repository->getById($id);

        return view('user.product.update', compact('product'));
    }

    public function store(ProductRequest $request, ProductRepositoryInterface $repository)
    {
        $data = $request->all();
        $product = $repository->create($data);
        if ($product)
        {
            return redirect()->back()->with('success', "the product has been added successfully");
        }
        return redirect()->back()->with('error', "An error has occurred");
    }

    public function update(Request $request, ProductRepositoryInterface $repository)
    {
        dd($request);
        $data = $request->all();

        $product = $repository->update($data);

        if($product)
        {
            return redirect()->back()->with('success', "the product has been updated successfully");
        }
        return redirect()->back()->with('error', "An error has occurred");
    }

}