<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mediaService extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description',
        'short_review',
        'review',
        'user_id',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
