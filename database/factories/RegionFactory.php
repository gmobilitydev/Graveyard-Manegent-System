<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use public\locations.json;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    protected static function getRegions(array $regs) : array {
        //array with the name and slugs to be returned
        // $regsArray = array('name' => null, 'slug' => null);
        $regsArray = [];

        //replace the null values with the specified values 
        foreach (range(0, count($regs)-1) as $key) {
            $regsArray['name'] = $regs["regions"][$key]["name"];
            $regsArray['slug'] = str_replace(' ', '-', $regsArray['name']);
            // there needs to be a way to break out of the array then return and 
            // pick up where you left off/ move to the next iteration
        }
        
        return $regsArray;

    }

    public function definition()
    {
        // $regions = json_decode(file_get_contents('public\locations.json'), true);

        // $regArray = array();


        // for ($i = 0; $i < (count($regions["regions"]) - 1); $i++) {
        //     $regArray[] = $regions["regions"][$i]["name"];
        // }

        // $name = $regions["regions"][0]["name"];
        // $slug = str_replace(' ', '-', $name);

        // return self::getRegions($regions["regions"]);

        

        return [
            'name' => $name = fake()->unique()->randomElement(["Zambezi", "Erongo", "Hardap", "||Karas", "Kavango West", "Kavango East", "Khomas", "Kunene", "Ohangwena", "Omaheke", "Omusati", "Oshana", "Oshikoto", "Otjozondjupa"]),
            'slug' => strtolower(str_replace(' ', '-', (str_replace('||', '',$name)) )),
        ];
    }
}
