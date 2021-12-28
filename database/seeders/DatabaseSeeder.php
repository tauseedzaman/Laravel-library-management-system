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
            AdminSeeder::class,
            AutherSeeder::class,
            BookIssueSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            PublisherSeeder::class,
            SettingsSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
