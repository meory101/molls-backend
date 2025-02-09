<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID', 'ProfilePicture', 'Bio', 'DateOfBirth', 'Gender', 'PhoneNumber', 'Address', 'SocialLinks'
    ];

    // علاقة عكسية مع المستخدم
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
