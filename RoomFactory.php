<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotelid = Hotel::inRandomOrder()->first();
        $roomnumberid = rand(100,999);
        $type = fake()->randomElement(['single','double','suite','vip','deluxe']);
        $price = 0;
            if ($type =='single') {
                $price = 500;
            } elseif ($type == 'double') {
                $price = 700;
            } elseif ($type == 'suite') {
                $price = 1000;
            } elseif ($type == 'vip') {
                $price = 1400;
            } elseif ($type == 'deluxe') {
                $price = 2000;
            };
            
        $isavailable = fake()->boolean(90);
        return [
            "hotel_id"=> $hotelid,
            'room_number' => $roomnumberid,
            'type' => $type,
            'per_night_price' => $price,
            'is_available' => $isavailable,
        ];
    }
}
