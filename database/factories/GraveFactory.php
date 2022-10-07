<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grave>
 */
class GraveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $sec_id = fake()->randomElement(range(1, 10));         
         //find the graveyard id to get the location and use the location to find the region
         $graveyard_id = DB::table('sections')
            // ->select('graveyard_id')
            ->where('id', '=', $sec_id)
            ->pluck('graveyard_id');
            // ->first();
        $location_id =  DB::table('graveyards')
            // ->select('location_id')
            ->where('id', '=', $graveyard_id)
            ->pluck('location_id');
            // ->first();
        $locationName = DB::table('locations')
        // ->select('name')
        ->where('id', '=', $location_id)
        ->pluck('name');
        // ->first();    

        $reg_id =  DB::table('locations')
            // ->select('region_id')
            ->where('id', '=', $location_id)
            ->pluck('region_id');
            // ->first();
        $regionName = DB::table('regions')
        // ->select('name')
        ->where('id', '=', $reg_id)
        ->pluck('name');
        // ->first();   

        $loc = strtoupper(substr($locationName, 2, 3));
        $reg = strtoupper(substr($regionName, 2, 3));

        $dirname = "public/assets/images";
        $images = ["{$dirname}/img2.jpg", "{$dirname}/multiple_graves_2.jpg", "{$dirname}/tombstone_2.jpg",];

        return [
        'grave_type_id' => fake()->randomElement([1,2]),
        'section_id' => $sec_id,
        'grave_number' => $graveNumber = fake()->unique()->randomElement(range($sec_id, 1000)),
        'grave_key' => $reg  . $loc . $graveNumber,
        'image' => fake()->randomElement($images),
        'grave_status' => fake()->randomElement([true, false]),

        ];
    }
}
