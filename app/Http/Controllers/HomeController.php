<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return inertia('Index/Index', [
            'message' => 'This is the home page!',
        ]);
    }

    public function aboutMe()
    {
        return inertia('Index/AboutMe');
    }

    public function portfolio()
    {
        return inertia('Index/Portfolio');
    }

    public function contact()
    {
        return inertia('Index/Contact');
    }
    
}
