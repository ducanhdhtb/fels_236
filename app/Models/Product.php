<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
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
