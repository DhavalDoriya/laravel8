<?php

namespace Database\Seeders;

use App\Models\AuthorBook;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorBook::insert([
            'author_id' => 1,
            'book_id' => 1,
        ]);

        AuthorBook::insert([
            'author_id' => 2,
            'book_id' => 1,
        ]);

        AuthorBook::insert([
            'author_id' => 3,
            'book_id' => 2,
        ]);

        AuthorBook::insert([
            'author_id' => 1,
            'book_id' => 2,
        ]);

        AuthorBook::insert([
            'author_id' => 2,
            'book_id' => 2,
        ]);
    }
}
