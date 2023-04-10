<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Customer_Addresses_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('customers_address')->insert([
            'address_id' => 1,
            'customer_id' => 1,
            'country_id' => 2,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers_address')->insert([
            'address_id' => 4,
            'customer_id' => 2,
            'country_id' => 1,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers_address')->insert([
            'address_id' => 2,
            'customer_id' => 2,
            'country_id' => 1,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers_address')->insert([
            'address_id' => 1,
            'customer_id' => 4,
            'country_id' => 2,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers_address')->insert([
            'address_id' => 2,
            'customer_id' => 4,
            'country_id' => 1,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('customers_address')->insert([
            'address_id' => 4,
            'customer_id' => 2,
            'country_id' => 2,
            'first_line' => Str::random(15),
            'second_line' => Str::random(15),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'status' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
