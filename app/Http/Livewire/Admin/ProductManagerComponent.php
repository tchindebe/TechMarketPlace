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

    public function sponsored($id){
        Product::where('id', $id)
            ->first()
            ->update(["sponsored" => 1]);

        return redirect()->back()->with('success', "The product has been successfully sponsored");
    }

    public function ofsponsored($id){
        Product::where('id', $id)
            ->first()
            ->update(["sponsored" => 0]);

        return redirect()->back()->with('success', "The product has been successfully of sponsored");
    }

    public function delete($id){
        Product::where('id', $id)
            ->first()
            ->delete();

        return redirect()->back()->with('error', "The product has been successfully deleted");
    }
}
