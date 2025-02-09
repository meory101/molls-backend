<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'address', 'user_role', 'profile_picture'
    ];
    public function role()
    {
        return $this->belongsTo(Role::class, 'user_role');
    }

    // علاقة واحد لواحد مع الملف الشخصي
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    // علاقة واحد لكثير مع الطلبات
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    // علاقة واحد لواحد مع سلة التسوق
    public function shoppingCart()
    {
        return $this->hasOne(ShoppingCart::class, 'user_id');
    }

    // علاقة واحد لكثير مع عمليات الدفع
    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }

    // علاقة واحد لكثير مع الإعلانات
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class, 'user_id');
    }
}
