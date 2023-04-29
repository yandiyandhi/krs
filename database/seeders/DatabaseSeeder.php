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
        Category::factory(5)->create();
        GoodNews::factory(20)->create();
        // GoodNews::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse voluptatem odit, modi a nulla provident eveniet architecto incidunt quae soluta nemo dolore hic?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse voluptatem odit, modi a nulla provident eveniet architecto incidunt quae soluta nemo dolore hic? Maxime fugiat a quae eveniet rerum? Ad esse a delectus nemo cupiditate maxime, asperiores, eum laudantium quam doloremque non dolorum earum, soluta dicta molestiae assumenda rem iste aliquam quasi quia ex laboriosam dolorem reprehenderit atque. Unde laudantium ipsa voluptatem distinctio cupiditate dolores possimus. Sint, quaerat sequi laboriosam rerum praesentium nobis necessitatibus laudantium deleniti molestias, alias numquam! Dolores enim dignissimos aut, totam voluptate qui consequatur est temporibus, non fugiat eveniet quaerat sed nulla, sint blanditiis. Deserunt, ipsa aliquid?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
