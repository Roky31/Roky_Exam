<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityId = City::inRandomOrder()->first();
        $starid = rand(1, 5);
        $name = fake()->company();
        $address = fake()->address() . ' ' . fake()->country();
        $email = fake()->email();
        return [
            'city_id' => $cityId,
            'name' => $name,
            'address' => $address,
            'phone' => fake()->phone(),
            'email' => $email,
            'star' => $starid,
        ];
    }
}
