<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mall_id', 'section_id', 'discount_id'
    ];

    // علاقة عكسية مع المول
    public function mall()
    {
        return $this->belongsTo(Mall::class, 'mall_id');
    }

    // علاقة عكسية مع القسم
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // علاقة واحد لكثير مع المنتجات
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id');
    }

    // علاقة عكسية مع الخصم
    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }

    // علاقة واحد لكثير مع الخصومات
    public function discounts()
    {
        return $this->hasMany(Discount::class, 'store_id');
    }
}
