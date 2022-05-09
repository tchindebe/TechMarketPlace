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
        'salary_price',
        'min_price',
        'max_price',
        'job_type',
        'description',
        'post_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
