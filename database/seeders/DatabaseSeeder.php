<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            AutherSeeder::class,
            BookIssueSeeder::class,
            CategorySeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            SettingsSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
