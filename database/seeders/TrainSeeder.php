<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();
        $train->code = 'CODE';
        $train->company = 'COMPANY';
        $train->dep_station = 'DEP STATION';
        $train->arr_station = 'ARR STATION';
        $train->dep_time = 12;
        $train->arr_time = 13;
        $train->carriages_number = 8;
        $train->on_time = true;
        $train->canceled = false;
        $train->save();
    }
}
