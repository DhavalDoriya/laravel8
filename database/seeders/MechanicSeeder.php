<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mechanic::insert([
            'name' =>  Str::random(15),
        ]);

        Mechanic::insert([
            'name' =>  Str::random(15),
        ]);


        Mechanic::insert([
            'name' =>  Str::random(15),
        ]);


        Mechanic::insert([
            'name' =>  Str::random(15),
        ]);


        Mechanic::insert([
            'name' =>  Str::random(15),
        ]);


    }
}
