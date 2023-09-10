<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(Product::class);
    }

    public function productCount()
    {
        return $this->hasMany(Product::class)->count();
    }
}
