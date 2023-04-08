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

    public function blog()
    {
        return view('blog', [
            'title' => 'Blog',
            'active' => 'blog',
        ]);
    }

    public function goodnews()
    {
        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
        ]);
    }

    public function service()
    {
        return view('service', [
            'title' => 'Service',
            'active' => 'service',
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
