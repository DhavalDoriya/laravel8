<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Car::insert([
            'model' =>  Str::random(5),
            'mechanic_id' => '1',
        ]);

        Car::insert([
            'model' =>  Str::random(5),
            'mechanic_id' => '2',
        ]);

        Car::insert([
            'model' =>  Str::random(5),
            'mechanic_id' => '3',
        ]);

        Car::insert([
            'model' =>  Str::random(5),
            'mechanic_id' => '4',
        ]);

        Car::insert([
            'model' =>  Str::random(5),
            'mechanic_id' => '5',
        ]);



    }
}
