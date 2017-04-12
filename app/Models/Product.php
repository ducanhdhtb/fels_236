<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
   
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
