<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Order_Histories_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_histories')->insert([
            'order_id' => 1,
            'status' => 'ordered',
            'created_at' =>  Carbon::now(),
        ]);

        DB::table('order_histories')->insert([
            'order_id' => 2,
            'status' => 'out_for_delivery',
            'created_at' =>  Carbon::now(),
        ]);

        DB::table('order_histories')->insert([
            'order_id' => 3,
            'status' => 'delivered',
            'created_at' =>  Carbon::now(),
        ]);

        DB::table('order_histories')->insert([
            'order_id' => 4,
            'status' => 'ordered',
            'created_at' =>  Carbon::now(),
        ]);
        DB::table('order_histories')->insert([
            'order_id' => 5,
            'status' => 'ordered',
            'created_at' =>  Carbon::now(),
        ]);
    }
}
