<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            // AuthorBookSeeder::class,
            // AuthorSeeder::class,
            // BookSeeder::class,
            // CountrySeeder::class,
            // Customer_Addresses_Seeder::class,
            // CustomerSeeder::class,
            // LanguageSeeder::class,
            // Order_Histories_Seeder::class,
            // Order_items_Seeder::class,
            // Orders_Seeder::class,
            // PublisherSeeder::class,
            // Shipping_Method_Seeder::class,
            // ProductSeeder::class

            Car::class,
            Mechanic::class,
            Owner::class
        ]);

    }
}
