<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
