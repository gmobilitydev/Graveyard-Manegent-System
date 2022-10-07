<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GraveType>
 */
class GraveTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gTypes = [
            '6ft',
            '12ft',
        ];

        return [
            'name' => $name = fake()->unique()->randomElement($gTypes),
            'slug' => strtolower(str_replace(' ', '-', $name)),
        ];
    }
}
