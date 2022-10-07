<?php

namespace Database\Factories;

use App\Models\grave;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deceased>
 */
class DeceasedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dirname = "public/assets/images";
        $images = ["{$dirname}/img2.jpg", "{$dirname}/multiple_graves_2.jpg", "{$dirname}/tombstone_2.jpg",];

        $occupied_graves = grave::where('grave_status', '=', 1)->get('id');
        $occupied_graves->toArray();

        return [
            'grave_id' => fake()->randomElement($occupied_graves),
            'first_names' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'dob' => $dob = fake()->dateTimeBetween('-100 years', '-1 week'),
            'dod' => fake()->dateTimeBetween($dob, 'now'),
            'image' => fake()->randomElement($images),
        ];
    }
}
