<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '1',
            'imageable_type'=> 'App\Models\Post',
        ]);

        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '2',
            'imageable_type'=> 'App\Models\Post',
        ]);

        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '3',
            'imageable_type'=> 'App\Models\Post',
        ]);

        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '1',
            'imageable_type'=> 'App\Models\User',
        ]);

        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '2',
            'imageable_type'=> 'App\Models\User',
        ]);

        Image::insert([
            'url'=> Str::random(15),
            'imageable_id'=> '3',
            'imageable_type'=> 'App\Models\User',
        ]);

    }
}
