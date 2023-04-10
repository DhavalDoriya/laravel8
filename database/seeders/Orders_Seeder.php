<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Orders_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'customer_id' => 1,
            'shipping_method' => 3,
            'destination_address_id' => 2,
            'order_date' => '2023-07-31 00:00:00',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2,
            'shipping_method' => 2,
            'destination_address_id' => 1,
            'order_date' => '2023-04-23 00:00:00',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 3,
            'shipping_method' => 4,
            'destination_address_id' => 1,
            'order_date' => '2023-07-31 00:00:00',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 3,
            'shipping_method' => 2,
            'destination_address_id' => 1,
            'order_date' => '2023-07-31 00:00:00',
        ]);
    }
}
