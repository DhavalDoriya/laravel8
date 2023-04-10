<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::insert([
            'name' =>  Str::random(15),
            'car_id' => '1',
        ]);

        Owner::insert([
            'name' =>  Str::random(15),
            'car_id' => '2',
        ]);

        Owner::insert([
            'name' =>  Str::random(15),
            'car_id' => '3',
        ]);

        Owner::insert([
            'name' =>  Str::random(15),
            'car_id' => '4',
        ]);

        Owner::insert([
            'name' =>  Str::random(15),
            'car_id' => '5',
        ]);
    }
}
