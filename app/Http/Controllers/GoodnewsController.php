<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class GoodnewsController extends Controller
{

    public function goodnews()
    {
        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'status' => GoodNews::with(['category'])->latest()->get()
        ]);
    }

    public function news()
    {
        return view('news', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'status' => 'goodback',
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
