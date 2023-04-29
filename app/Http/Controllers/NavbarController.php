<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'status' => Category::all()
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'title' => 'Blog',
            'active' => 'blog',
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
