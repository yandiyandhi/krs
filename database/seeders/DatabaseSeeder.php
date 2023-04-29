<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\GoodNews;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::factory(5)->create();
        Category::create([
            'name' => 'Artikel',
            'slug' => 'artikel'
        ]);
        Category::create([
            'name' => 'Learning',
            'slug' => 'learning'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        GoodNews::factory(20)->create();
    }
}
