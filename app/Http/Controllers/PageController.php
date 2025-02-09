<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function clothingDepartment()
    {
        return view('clothing-department');
    }

    public function foodSection()
    {
        return view('food-section');
    }

    public function makeupDepartment()
    {
        return view('makeup-department');
    }

    public function mobilesSection()
    {
        return view('mobiles-section');
    }
}
