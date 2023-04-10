<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'Publisher_name'=>'Arihant',
        ]);

        DB::table('publishers')->insert([
            'Publisher_name'=>'navneet',
        ]);

        DB::table('publishers')->insert([
            'Publisher_name'=>'gala',
        ]);

      
    }
}
