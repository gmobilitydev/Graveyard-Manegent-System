<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocationType>
 */
class LocationTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()    
    {
        $types = [
            'City',
            'Town',
            'Farm',
            'Plot',
            'Village',
            'Settlement'
        ];

        return [
            'name' => $name = fake()->unique()->randomElement($types),
            'slug' => strtolower(str_replace(' ', '-', $name)),
        ];
    }
}
