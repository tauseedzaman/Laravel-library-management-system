<?php

namespace Database\Seeders;

use App\Models\auther;
use Illuminate\Database\Seeder;

class AutherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (auther::count() == 0) {
            auther::factory(10)->create();
        }
    }
}
