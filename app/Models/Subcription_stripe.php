<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcription_stripe extends Model
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
    ];
}
