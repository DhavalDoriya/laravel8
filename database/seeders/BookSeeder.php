<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'language_id' => 1,
            'publisher_id' => 1,
            'title' => 'Satya ke Prayog',
            'num_pages' => 200,
            'published_date' =>  '2014-07-31 00:00:00',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('books')->insert([
            'language_id' => 3,
            'publisher_id' => 3,
            'title' => 'Today Tonight Tomorrow ',
            'num_pages' => 200,
            'published_date' =>  '2020-07-31 00:00:00',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('books')->insert([
            'language_id' => 2,
            'publisher_id' => 1,
            'title' => 'Things We Never Got Over ',
            'num_pages' => 200,
            'published_date' =>  '2017-07-31 00:00:00',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
        DB::table('books')->insert([
            'language_id' => 4,
            'publisher_id' => 2,
            'title' => 'Call of the Forest',
            'num_pages' => 200,
            'published_date' =>  '2019-07-31 00:00:00',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
