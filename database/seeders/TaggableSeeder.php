<?php

namespace Database\Seeders;

use App\Models\Taggable;
use Illuminate\Database\Seeder;

class TaggableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taggable::insert([
            'tag_id'=> '1',
            'taggable_id'=> '1',
            'taggable_type' => 'App\Models\Post',
            'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '2',
            'taggable_id'=> '1',
            'taggable_type' => 'App\Models\Post',
                'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '2',
            'taggable_id'=> '2',
            'taggable_type' => 'App\Models\Post',
                'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '1',
            'taggable_id'=> '1',
            'taggable_type' => 'App\Models\Video',
                'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '2',
            'taggable_id'=> '1',
            'taggable_type' => 'App\Models\Video',
                'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '3',
            'taggable_id'=> '1',
            'taggable_type' => 'App\Models\Video',
                'created_at'=>now()
        ]);

        Taggable::insert([
            'tag_id'=> '3',
            'taggable_id'=> '2',
            'taggable_type' => 'App\Models\Video',
                'created_at'=>now()
        ]);
    }
}
