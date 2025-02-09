<?php

namespace App\Http\Controllers;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admindashboard'); // تأكد من وجود هذا العرض
    }
}
