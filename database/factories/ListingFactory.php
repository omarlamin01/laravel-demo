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
            'tags' => $this->faker->word() . ', ' . $this->faker->word() . ', ' . $this->faker->word() . ', backend, php',
            'company' => $this->faker->company(),
            'location' => $this->faker->city() . ', ' . $this->faker->countryCode(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
