<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '1',
            'commentable_type'=> 'App\Models\Post',
        ]);

        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '2',
            'commentable_type'=> 'App\Models\Post',
        ]);

        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '3',
            'commentable_type'=> 'App\Models\Post',
        ]);

        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '1',
            'commentable_type'=> 'App\Models\Video',
        ]);

        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '2',
            'commentable_type'=> 'App\Models\Video',
        ]);

        Comment::insert([
            'body'=> Str::random(15),
            'commentable_id'=> '3',
            'commentable_type'=> 'App\Models\Video',
        ]);
    }
}
