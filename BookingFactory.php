<?php

namespace Database\Factories;


use App\Models\Room;
use App\Models\User;
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
        $users = User::inRandomOrder()->first();
        $checkinat= fake()->dateTimeBetween('-7 days', 'now');
        $checkinout = fake()->boolean(50) ? fake()->dateTimeBetween($checkinat, 'now') : null;
        return [
            'room_id' => $roomid,
            'user_id' => $users,
            'check_in_at' => $checkinat,
            'check_in_out' => $checkinout,
        ];
    }
}
