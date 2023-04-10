<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            'title'=> Str::random(15),
            'body'=> Str::random(15),

        ]);

        Post::insert([
            'title'=> Str::random(15),
            'body'=> Str::random(15),

        ]);

        Post::insert([
            'title'=> Str::random(15),
            'body'=> Str::random(15),

        ]);

        Post::insert([
            'title'=> Str::random(15),
            'body'=> Str::random(15),

        ]); Post::insert([
            'title'=> Str::random(15),
            'body'=> Str::random(15),

        ]);
    }
}
