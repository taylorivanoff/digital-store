<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function total()
    {
        return $this->products()->sum('price');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withTimestamps();
    }
}
