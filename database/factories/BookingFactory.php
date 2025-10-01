<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomid = Room::inRandomOrder()->first();
        $guestid = Guest::inRandomOrder()->first();
        $checkinat= fake()->dateTimeBetween('-7 days', 'now');
        $checkinout = fake()->boolean(50) ? fake()->dateTimeBetween($checkinat, 'now') : null;
        return [
            'room_id' => $roomid,
            'guest_id' => $guestid,
            'check_in_at' => $checkinat,
            'check_in_out' => $checkinout,
        ];
    }
}
