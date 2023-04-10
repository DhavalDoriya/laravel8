<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('countries')->insert([
            'title' => 'India',
            'country_code'=>'In'
        ]);
        
        DB::table('countries')->insert([
            'title' => 'United Kingdom',
            'country_code'=>'UK'
        ]);

        DB::table('countries')->insert([
            'title' => 'United State of America',
            'country_code'=>'USA'
        ]);

        DB::table('countries')->insert([
            'title' => 'Shree Lanka',
            'country_code'=>'SL'
        ]);
     
    }
}
