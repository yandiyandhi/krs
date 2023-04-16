<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodnewsController extends Controller
{

    public function goodnews()
    {
        return view('goodnews', [
            'title' => 'Good News',
            'active' => 'goodnews',
            'status' => 'goodback',
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
}
