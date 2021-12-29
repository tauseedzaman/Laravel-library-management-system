<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (book::count() == 0) {
            book::factory(10)->create();
        }
    }
}
