<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'total_amount', 'payment_id', 'user_id'
    ];

    // علاقة عكسية مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // علاقة واحد لواحد مع الدفع
    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id');
    }
}
