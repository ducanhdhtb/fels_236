<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
  
    public function products()
    {
        return $this->hasManyThrough(Product::class, SubCategory::class, 'category_id', 'sub_category_id', 'id');
    }
}
