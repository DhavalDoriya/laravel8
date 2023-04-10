<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::insert([
            'title'=> Str::random(15),
            'url'=> Str::random(15),

        ]);

       Video::insert([
            'title'=> Str::random(15),
            'url'=> Str::random(15),

        ]);

       Video::insert([
            'title'=> Str::random(15),
            'url'=> Str::random(15),

        ]);

       Video::insert([
            'title'=> Str::random(15),
            'url'=> Str::random(15),

        ]);Video::insert([
            'title'=> Str::random(15),
            'url'=> Str::random(15),

        ]);
    }
}
