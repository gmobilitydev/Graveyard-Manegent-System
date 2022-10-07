<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'graveyard_id' => fake()->randomElement(range(1, 10)),
            'name' => fake()->randomElement(["North", "South", "East", "West"]) .  " Section",
            'allocated_graves' => fake()->randomElement(range(100, 500)),
        ];
    }
}
