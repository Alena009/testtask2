<?php

namespace Database\Seeders;

use App\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            [
                'date' => Carbon::now()->subDays(1)->format('Y-m-d'),
                'miles' => 11.3,
                'car_id' => 1
            ],
            [
                'date' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'miles' => 12.0,
                'car_id' => 4
            ],
            [
                'date' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'miles' => 6.8,
                'car_id' => 1
            ],
            [
                'date' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'miles' => 5,
                'car_id' => 2
            ],
            [
                'date' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'miles' => 10.3,
                'car_id' => 3
            ]
        ]);
    }
}
