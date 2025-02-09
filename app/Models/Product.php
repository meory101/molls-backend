<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'image', 'brand', 'quantity', 'store_id'
    ];

    // علاقة عكسية مع المتجر
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    // علاقة كثير لكثير مع سلة التسوق عبر جدول وسيط
    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class, 'shopping_cart_products', 'product_id', 'shopping_cart_id')
                    ->withPivot('quantity', 'price');
    }

    // علاقة واحد لكثير مع الخصومات
    public function discounts()
    {
        return $this->hasMany(Discount::class, 'product_id');
    }

    // علاقة كثير لكثير مع المولات
    public function malls()
    {
        return $this->belongsToMany(Mall::class, 'product_mall', 'product_id', 'mall_id');
    }
}
