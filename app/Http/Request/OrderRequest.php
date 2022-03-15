<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest{

    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'address'=> 'required',
            'country' => 'required',
            'city' => 'required',
            'bp' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'payment_method' => 'required',
        ];
    }
}
