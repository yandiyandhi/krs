<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'active' => 'about',
        ]);
    }
}
