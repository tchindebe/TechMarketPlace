<?php

namespace App\Repository\Category\AdaptorEloquentCategory;

use App\Models\Category;
use App\Repository\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AdaptorEloquentCategory implements CategoryRepositoryInterface
{
    public function create(array $data)
    {
        $category = Category::create([
            "name" => $data['name'],
            "slug" => $data['slug'],
            "user_id" => Auth::user()->id
        ]);

        return $category;
    }

    public function update(array $data)
    {
        $category = Category::where('id', $data['id'])->firstOrFail();
        $category->update([
            "name" => $data['name'],
            "slug" => $data['slug']
        ]);

        return $category;
    }

    public function fetById(int $id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        return $category;
    }

    public function AllCategory()
    {
        // TODO: Implement AllCategory() method.
    }
}
