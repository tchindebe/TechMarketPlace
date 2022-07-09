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
        'image',
        'description',
        'post_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blogComments()
    {
        return $this->hasMany('\App\Models\Comment', 'posts_id', 'id');
    }

}
