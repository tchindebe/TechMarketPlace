<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcriptionShop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'stripe_id',
        'stripe_status',
        'transaction_type',
        'quantity',
        'article_id',
        'type',
        'price',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}