<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class GoodnewsController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'status' => GoodNews::latest()->paginate(4)
        ]);
    }

    public function goodnews()
    {

        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'nav' => Category::get(),
            // 'status' => GoodNews::latest()->Filter(request(['category']))->paginate(7)->withQueryString()
            'status' => GoodNews::latest()->get()
        ]);
    }

    public function news(GoodNews $news)
    {
        return view('news', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'nav' => Category::get(),
            'news' => $news
        ]);
    }

    // public function show () {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "active" => "Posts",
    //         "post" => $post
    //     ]);
    // }
}
