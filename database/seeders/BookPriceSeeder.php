<?php

namespace Database\Seeders;

use App\Models\BookPrice;
use Illuminate\Database\Seeder;

class BookPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookPrice::insert([
            'book_id' => '1',
            'price' => 500,
            'created_at'=> now()

        ]);

        BookPrice::insert([
            'book_id' => '2',
            'price' => 200,
            'created_at'=> now(),

        ]);

        BookPrice::insert([
            'book_id' => '3',
            'price' => 300,
            'created_at'=> now(),

        ]);

        BookPrice::insert([
            'book_id' => '4',
            'price' => 600,
            'created_at'=> now(),

        ]);

        BookPrice::insert([
            'book_id' => '5',
            'price' => 800,
            'created_at'=> now(),

        ]);
    }
}
