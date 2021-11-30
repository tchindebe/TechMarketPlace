<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'phone',
        'country',
        'city',
        'bp',
        'description',
        'slogan',
        'logo'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImage()
    {
        $imagePath = $this->image ?? 'uploads/defautimage.jpg';

        return '/storage' . $imagePath;
    }
}
