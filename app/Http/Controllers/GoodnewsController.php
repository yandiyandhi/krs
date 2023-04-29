<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GoodNews;
use Illuminate\Http\Request;

class GoodnewsController extends Controller
{

    public function goodnews(Request $request)
    {

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
        }

        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
            // 'status' => GoodNews::with(['category'])->latest()->get()->paginate(7)->withQueryString()            
            'status' => GoodNews::latest()->Filter(request(['category']))->paginate(7)->withQueryString()
            // 'status' => GoodNews::all()
        ]);
    }

    public function news(GoodNews $news)
    {

        return view('news', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'status' => $news
        ]);
    }
}
