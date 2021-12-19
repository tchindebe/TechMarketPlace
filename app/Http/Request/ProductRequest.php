<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends  FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'quantity'=> 'required',
            'image1' => 'required',
            'image2' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'category' => 'required',
        ];
    }
}
