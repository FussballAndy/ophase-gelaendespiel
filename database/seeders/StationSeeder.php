<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonData = File::get(base_path('database/json/stations.json'));
        $jsonStations = json_decode($jsonData);
        foreach ($jsonStations as $station) {
            Station::create([
                'name' => $station->name,
                'location' => $station->location,
            ]);
        }
        //
    }
}
