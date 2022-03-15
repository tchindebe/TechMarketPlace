<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUserRequest extends  FormRequest {
    public function message()
    {
        return [
            'country.required' => "This country is require",
            'city.required' => "This city is require",
            'phone.required' => "This phone number is require",
            'description.required' => "This description is require",
            'bp.required' => "This bp is require",
            'slogan.required' => "This slogan is require",
        ];
    }

    public function rules()
    {
        return [
            'country' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'description',
            'bp' => 'required',
            'slogan',
            'log'
        ];
    }
}
