<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $passportid = rand(100000,999999);
        $firstname = fake()->words(1, true);
        $lastname =  fake()->words(1, true);
        return [
            "firstname"=> $firstname,
            "lastname"=> $lastname,
            'passport_number' => $passportid,
        ];
    }
}
