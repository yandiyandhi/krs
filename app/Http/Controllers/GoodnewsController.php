<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class GoodnewsController extends Controller
{

    public function goodnews()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('goodnews', [
            'title' => 'Good News' . $title,
            'active' => 'goodnews',
            // 'status' => GoodNews::with(['category'])->latest()->get()->paginate(7)->withQueryString()            
            'status' => GoodNews::latest()->Filter(request(['category']))->paginate(7)->withQueryString()
        ]);
    }

    public function news(GoodNews $news)
    {
        return view('news', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'news' => $news,
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
