<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID', 'CartStatus', 'DiscountCode'
    ];

    // علاقة عكسية مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    // علاقة كثير لكثير مع المنتجات عبر جدول وسيط
    public function products()
    {
        return $this->belongsToMany(Product::class, 'ShoppingCartProducts', 'CartID', 'ProductID');
    }
    // إضافة منتج إلى السلة 
    public function addProduct($productID, $quantity = 1)
     { 
        $existingProduct = $this->products()->where('product_id', $productID)->first();
         if ($existingProduct) { 
            // تحديث الكمية إذا كان المنتج موجودًا بالفعل في السلة 
            $this->products()->updateExistingPivot($productID, ['quantity' => $existingProduct->pivot->quantity + $quantity]); } 
            else { // إضافة المنتج إلى السلة إذا لم يكن موجودًا 
                $this->products()->attach($productID, ['quantity' => $quantity]); } } // إزالة منتج من السلة 
                public function removeProduct($productID) { $this->products()->detach($productID); }
}

