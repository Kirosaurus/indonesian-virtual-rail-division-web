<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
