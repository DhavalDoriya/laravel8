<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            'name'=> 'music',
            'created_at'=> now(),
        ]);

        Tag::insert([
            'name'=> 'cricket',
            'created_at'=> now(),
        ]);

        Tag::insert([
            'name'=> 'coding',
            'created_at'=> now(),
        ]);
    }
}
