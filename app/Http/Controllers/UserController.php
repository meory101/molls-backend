<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();

        switch ($user->user_role) {
            case 'Admin':
                return view('admindashboard');
            case 'Employee Manager':
                return view('employee_manager.dashboard');
            case 'Store Manager':
                return view('store_manager.dashboard');
            case 'User':
                return view('home');
            default:
                return redirect()->route('login'); 
        }
    }
}
