<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Shipping_Method_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    // order_items
    {
        DB::table('shipping_methods')->insert([
            'title'=>'air',
            'cost'=>55.9,
        ]);

        DB::table('shipping_methods')->insert([
            'title'=>Str::random(5),
            'cost'=>35.9,
        ]);

        DB::table('shipping_methods')->insert([
            'title'=>Str::random(5),
            'cost'=>65.9,
        ]);

        DB::table('shipping_methods')->insert([
            'title'=>Str::random(5),
            'cost'=>25.9,
        ]);
    }
}
