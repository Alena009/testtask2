<?php

use Illuminate\Database\Seeder;
use Database\Seeders\CarSeeder;
use Database\Seeders\TripSeeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::factory(10)->create();

        $this->call(CarSeeder::class);
        $this->call(TripSeeder::class);
    }
}
