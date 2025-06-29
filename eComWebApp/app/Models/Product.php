<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['title', 'price', 'picture', 'rating', 'type', 'category']; // Add all the fields that need to be mass-assigned

    // Optionally, define an accessor for images
    public function getPictureAttribute($value)
    {
        return $value ? $value : 'default.jpg'; // Return default image if none exists
    }
}
