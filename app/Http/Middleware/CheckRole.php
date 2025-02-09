<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->user_role == 'admin') {
            return redirect('/admindashboard'); // توجيه المستخدم المسؤول إلى لوحة التحكم
        }

        if (!Auth::check() || Auth::user()->user_role != $role) {
            return redirect('homee'); // توجيه المستخدم إلى homee في حالة عدم توفر الصلاحيات
        }

        return $next($request);
    }
}
