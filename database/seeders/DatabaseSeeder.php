<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        echo "Start..." . PHP_EOL;
        for($i = 0; $i < 5000; $i++) {
            echo "Running $i" . PHP_EOL;
            User::factory(200)->create();
        }
    }
}
