<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'travel,traveling,trip',
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'season' => now(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
