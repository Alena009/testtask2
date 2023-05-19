<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'make' => 'Land Rover',
                'model' => 'Range Rover Sport',
                'year' => 2017
            ],
            [
                'make' => 'Ford',
                'model' => 'F150',
                'year' => 2014
            ],
            [
                'make' => 'Chevy',
                'model' => 'Tahoe',
                'year' => 2015
            ],
            [
                'make' => 'Aston Martin',
                'model' => 'Vanquish',
                'year' => 2018
            ]
        ]);
    }
}
