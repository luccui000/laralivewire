<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Start..." . PHP_EOL;
        for($i = 0; $i < 5000; $i++) {
            echo "Running $i" . PHP_EOL;
            User::factory(200)->create();
        }
    }
}
