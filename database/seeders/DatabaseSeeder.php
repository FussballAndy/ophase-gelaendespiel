<?php

namespace Database\Seeders;

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

        User::factory()->for(Station::all()->first())->create([
            'token' => config('auth.admin_password')
        ]);
    }
}
