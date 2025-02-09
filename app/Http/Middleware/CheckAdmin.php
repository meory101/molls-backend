<?php
namespace AppHttpMiddleware;

use Closure;
use IlluminateHttpRequest;
use IlluminateSupportFacadesAuth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        return redirect('/home'); // إعادة التوجيه إذا لم يكن المستخدم لديه صلاحيات الإدارة
    }
}
