<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'language_code' => 'eng',
            'language_name'=>'English',
        ]);

        DB::table('languages')->insert([
            'language_code' => 'guj',
            'language_name'=>'Gujarati',
        ]);

        DB::table('languages')->insert([
            'language_code' => 'hi',
            'language_name'=>'Hindi',
        ]);

        DB::table('languages')->insert([
            'language_code' => 'mr',
            'language_name'=>'Marathi',
        ]);
    }
}
