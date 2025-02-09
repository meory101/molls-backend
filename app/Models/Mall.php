<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'section_id'
    ];

    // علاقة عكسية مع القسم
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // علاقة واحد لكثير مع المتاجر
    public function stores()
    {
        return $this->hasMany(Store::class, 'mall_id');
    }

    // علاقة واحد لكثير مع الإعلانات
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'mall_id');
    }

    // علاقة كثير لكثير مع المنتجات
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_mall', 'mall_id', 'product_id');
    }

    // علاقة واحد لكثير مع الخصومات
    public function discounts()
    {
        return $this->hasMany(Discount::class, 'mall_id');
    }
}
