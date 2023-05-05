<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('service');
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'status' => GoodNews::take(4)->orderBy('created_at')->get()
        ]);
    }

    public function privacy()
    {
        return view('privacy', [
            'title' => 'Privacy Police',
            'active' => 'privacy',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'status' => GoodNews::take(4)->orderBy('created_at')->get()
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact Us',
            'active' => 'contact',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'status' => GoodNews::take(4)->orderBy('created_at')->get()
        ]);
    }

    public function term()
    {
        return view('term', [
            'title' => 'Term',
            'active' => 'term',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'status' => GoodNews::take(4)->orderBy('created_at')->get()
        ]);
    }
}
