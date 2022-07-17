<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    use HasFactory;

    protected $table = "products";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order(){

        return $this->belongsTo(Ordereds::class);
    }

    public function sponsoreds(){
        return $this->hasMany(productSponsored::class);
    }
}
