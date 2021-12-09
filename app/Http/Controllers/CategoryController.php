<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repository\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(CategoryRepositoryInterface $repository)
    {
        return view('user.Category.index');
    }

    public function store(Request $request, CategoryRepositoryInterface $repository)
    {
        $data = request()->validate([
            "name" => "required",
            "slug" => "required",
        ]);
        $category = $repository->create($data);
        if ($category){
            return redirect()->back()->with('success', "the category has been successfully edited");
        }
        return redirect()->back()->with('error', "an error occurred please try again");
    }

    public function update(Request $request, CategoryRepositoryInterface $repository)
    {
        $data = request()->validate([
            "name" => "required",
            "slug" => "required",
            "id" => "required",
        ]);
        $category = $repository->update($data);

        if ($category){
            return redirect()->back()->with('success', "the category has been successfully edited");
        }
        return redirect()->back()->with('error', "an error occurred please try again");
    }
}
