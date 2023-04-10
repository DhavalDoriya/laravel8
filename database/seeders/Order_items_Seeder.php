<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_items_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //order_items
        DB::table('order_items')->insert([
            'order_id'=>1,
            'book_id'=>5,
            'price' => 200,
        ]);

        DB::table('order_items')->insert([
            'order_id'=>2,
            'book_id'=>3,
            'price' => 500,
        ]);

        DB::table('order_items')->insert([
            'order_id'=>4,
            'book_id'=>5,
            'price' => 300,
        ]);

        DB::table('order_items')->insert([
            'order_id'=>2,
            'book_id'=>4,
            'price' => 400,
        ]);
    }
}
