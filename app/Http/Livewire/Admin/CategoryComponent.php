<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {
        $category = new Category();

        dd($category);

        return view('livewire.admin.category-component');
    }
}
