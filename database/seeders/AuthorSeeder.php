<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'author_name' => 'Khushwant Singh',
        ]);

        DB::table('authors')->insert([
            'author_name' => 'Rabindranath Tagore',
        ]);
        DB::table('authors')->insert([
            'author_name' => 'Mulk Raj Anand',
        ]);
        DB::table('authors')->insert([
            'author_name' => 'Ruskin Bond',
        ]);
        DB::table('authors')->insert([
            'author_name' => 'Aravind Adiga',
        ]);
    }
}
