<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodNews extends Model
{
    // use HasFactory;

    // yang tidak boleh diis
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filter)
    {
        // $query->when($filter['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
