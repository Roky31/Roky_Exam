<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
        ]);
        User::factory(15)->create();
        Hotel::factory(15)->create();
        Room::factory(15)->create();
        Booking::factory(15)->create();
    }
}
