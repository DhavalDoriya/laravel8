<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'first_name' => 'Arihant',
            'last_name' => 'Agrawal',
            'email' => 'Arihant@mail.com',
            'status' => 1,
            'membership' => 'silver',
            'hobbies' => 'cricket',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),

        ]);

        DB::table('customers')->insert([
            'first_name' => 'jay',
            'last_name' => 'jadav',
            'email' => 'jay@mail.com',
            'status' => 1,
            'membership' => 'silver',
            'hobbies' => 'cricket',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers')->insert([
            'first_name' => 'sagar',
            'last_name' => 'suthar',
            'email' => 'sagar@mail.com',
            'status' => 0,
            'membership' => 'silver',
            'hobbies' => 'cricket',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers')->insert([
            'first_name' => 'mohit',
            'last_name' => 'malhar',
            'email' => 'mohit@mail.com',
            'status' => 1,
            'membership' => 'gold',
            'hobbies' => 'cricket',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers')->insert([
            'first_name' => 'dhaval',
            'last_name' => 'doriya',
            'email' => 'dhaval@mail.com',
            'status' => 1,
            'membership' => 'gold',
            'hobbies' => 'cricket',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
