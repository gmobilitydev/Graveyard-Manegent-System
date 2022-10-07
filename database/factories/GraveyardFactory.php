<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\graveyard>
 */
class GraveyardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $locations = array("Windhoek", "Walvis Bay", "Swakopmund", "Henties Bay", "Omaruru", "Gibeon", "Gochas", "Kalkrand", "Maltahöhe", "Stampriet", "Hoachanas", "Rietoog", "Schlip", "Aroab", "Aus", "Berseba", "Bethanie", "Koës", "Tses", "Aranos", "Rehoboth", "Mariental");

        $name = fake()->unique()->randomElement($locations);
        $number = fake()->randomElement(range(1, 1000));
        $streetName = fake()->unique()->name();


        return [
            //
            'location_id' => fake()->randomElement(range(1, 10)),
            'name' => "{$name} Cemetery",
            'address' => "{$number}, {$streetName} street",
        ];
    }
}
