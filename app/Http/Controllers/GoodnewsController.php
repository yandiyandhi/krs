<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodnewsController extends Controller
{
    public $count = 4;

    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'status' => GoodNews::take(4)->orderBy('created_at')->get()
        ]);
    }

    public function goodnews()
    {
        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'nav' => Category::orderBy('name', 'asc')->get(),
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'rec' => GoodNews::take(4)->orderBy('created_at')->get(),
            'status' => GoodNews::orderBy('views', 'desc')->paginate(4)->withQueryString()
        ]);
    }

    public function news(GoodNews $news)
    {

        DB::table('good_news')->where('slug', $news->slug)->increment('views');
        return view('news', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'list' => GoodNews::take(3)->orderBy('views', 'desc')->get(),
            'nav' => Category::orderBy('name', 'asc')->get(),
            'news' => $news
        ]);
    }

    public function more()
    {
        return $this->count += 4;
    }

    // public function show () {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "active" => "Posts",
    //         "post" => $post
    //     ]);
    // }
}
