<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'category',
        'skills',
        'min_price',
        'max_price',
        'description',
        'post_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'username']);
    }

}
