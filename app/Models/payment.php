<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}