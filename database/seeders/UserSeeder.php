<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id'=> 1,
            'name'=> Str::random(15),
            'email'=> Str::random(15),
            'password'=> Str::random(15),

        ]);

        User::insert([
            'id'=> 2,
            'name'=> Str::random(15),
            'email'=> Str::random(15),
            'password'=> Str::random(15),

        ]);

        User::insert([
            'id'=> 3,
            'name'=> Str::random(15),
            'email'=> Str::random(15),
            'password'=> Str::random(15),

        ]);
    }
}
