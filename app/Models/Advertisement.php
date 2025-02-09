<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'mall_id', 'user_id'
    ];

    // علاقة عكسية مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // علاقة عكسية مع المول
    public function mall()
    {
        return $this->belongsTo(Mall::class, 'mall_id');
    }
}
