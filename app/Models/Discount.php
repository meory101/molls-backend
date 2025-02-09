<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'start', 'end_date', 'product_id', 'store_id', 'mall_id'
    ];

    // علاقة عكسية مع المنتج
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // علاقة عكسية مع المتجر
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    // علاقة عكسية مع المول
    public function mall()
    {
        return $this->belongsTo(Mall::class, 'mall_id');
    }
}
