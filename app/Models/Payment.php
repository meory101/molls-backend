<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'method', 'date', 'status', 'user_id', 'order_id'
    ];

    // علاقة عكسية مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // علاقة عكسية مع الطلب
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
