<?php

namespace Database\Seeders;

use App\Models\GameRound;
use App\Models\Station;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            StationSeeder::class
        ]);

        $station = Station::all()->first();

        User::factory()->for($station)->create([
            'token' => config('auth.admin_password')
        ]);

        GameRound::factory()
            ->for($station)
            ->count(3)
            ->sequence(['time_slot' => 0], ['time_slot' => 1], ['time_slot' => 2])
            ->create();
    }
}
