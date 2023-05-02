<?php

namespace App\Http\Livewire;

use App\Models\GoodNews;
use Livewire\Component;
use Psy\Readline\Hoa\Console;

class Content extends \Livewire\Component
{

    public $count = 4;

    public function render()
    {
        $data = GoodNews::take($this->count)->get();
        return view('livewire.content', [
            'contents' => $data
        ]);
    }


    public function loadmore()
    {
        $this->count += 4;
    }
}
