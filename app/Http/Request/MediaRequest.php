<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
{
    public function rules(){
        return[
            "title" => "required",
            "price" => "required",
            "category" => "required",
            "description" => "required",
            "short_review" => "required",
            "review" => "required",
        ];
    }

}
