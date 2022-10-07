<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\LocationType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */


class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // public function factory(Faker $faker) {
    //     $orgiem = $faker->randomElement(['Fabrication','Raw','Resale','Cleaning','Others']);

    //     return [
    //         'origem' => $orgiem ,
    //         'quantity' => rand(100,999),
    //         'batch' => $orgiem == 'Fabrication' ? null : $faker->ean13,
    //     ];
    // }

    // public function assignName(Faker $faker)
    // {
        
    //     $types = $faker->randomElement([
    //         'City',
    //         'Town',
    //         'Farm',
    //         'Plot',
    //         'Village',
    //     ]);

    //     return [
    //         'location_types_id' = $types,

    //     ];
    // }

    public function definition()
    {       
        //get array of regions
        // $reg_ids = DB::table('regions')
        // ->select('id');
        // //get array of location types
        // $loc_type_ids = [rand(1, 5)];


        //random city and town names where the region and location id matches

        // $name = fake()->randomElement(rand(1, 14));
        // $nameStr = strval($name);

        // $subjectVal = strtolower($nameStr);
        // $slug = str_replace(' ', '-', $subjectVal);

//-------------------------------------------------------------------------------------------------------------
         //choose the region id at random
        //  $regions = '';
        //  $reg_ids = fake()->randomElement(range(1, 14));
        //  //find the region that matches that id
        //  $regionName = DB::table('regions')
        //     ->select('name')
        //     ->where('id', '=', $reg_ids)
        //     ->first();
        //  //choose the location type id at random
        //  $loc_type_ids = fake()->randomElement(range(1, 14));
        //  //find the location type that matches that id
        //  $locTypeName = DB::table('location_types')
        //     ->select('name')
        //     ->where('id', '=', $loc_type_ids)
        //     ->first();
        //  //for each region if the location type is city take from ["regions"]["name"] = $regionName
        //  $locations = json_decode(file_get_contents('public\locations.json'));
        //  $regions = $locations->regions;
        

        //  foreach ($regions as $region) {
            //     if ($region->name == $regionName && $locTypeName == 'City') {
                //         $location = [
                    //             'region_id' => $reg_ids,
        //             'location_types_id' => $loc_type_ids,
        //             'name' => $name = fake()->randomElement($region->cities),
        //             'slug' => strtolower(str_replace(' ', '-',$name)),
        //         ];
        //     } elseif ($region->name == $regionName && $locTypeName == 'Town') {
        //         $location = [
        //             'region_id' => $reg_ids,
        //             'location_types_id' => $loc_type_ids,
        //             'name' => $name = fake()->randomElement($region->towns),
        //             'slug' => strtolower(str_replace(' ', '-',$name)),
        //         ];
        //     } elseif ($region->name == $regionName && $locTypeName == 'Farm') {
        //         $location =[
            //             'region_id' => $reg_ids,
            //             'location_types_id' => $loc_type_ids,
        //             'name' => $name = fake()->randomElement($region->farms),
        //             'slug' => strtolower(str_replace(' ', '-',$name)),
        //         ];
        //     } elseif ($region->name == $regionName && $locTypeName == 'Plot') {
        //         $location =[
        //             'region_id' => $reg_ids,
        //             'location_types_id' => $loc_type_ids,
        //             'name' => $name = fake()->randomElement($region->plots),
        //             'slug' => strtolower(str_replace(' ', '-',$name)),
        //         ];
        //     } elseif ($region->name == $regionName && $locTypeName == 'Village') {
            //         $location =[
                //             'region_id' => $reg_ids,
                //             'location_types_id' => $loc_type_ids,
                //             'name' => $name = fake()->randomElement($region->villages),
                //             'slug' => strtolower(str_replace(' ', '-',$name)),
                //         ];
                //     } elseif ($region->name == $regionName && $locTypeName == 'Settlement') {
        //         $location =[
            //             'region_id' => $reg_ids,
        //             'location_types_id' => $loc_type_ids,
        //             'name' => $name = fake()->randomElement($region->settlements),
        //             'slug' => strtolower(str_replace(' ', '-',$name)),
        //         ];
        //     }
        // };

        // $region = RegionFactory::class;
        
        //FACTORY WITH RELATIONSHIP
       

        //  return $location;
        
        $locations = array("Windhoek", "Walvis Bay", "Swakopmund", "Henties Bay", "Omaruru","Gibeon", "Gochas", "Kalkrand", "Maltahöhe", "Stampriet", "Hoachanas", "Rietoog", "Schlip", "Aroab", "Aus", "Berseba", "Bethanie", "Koës", "Tses", "Aranos", "Rehoboth", "Mariental");

        return [
            // 'region_id' => function (array $atrtibutes) {
            //     return Region::find($atrtibutes['region_id'])->type;
            // },
            // 'location_types_id' => function (array $atrtibutes) {
            //     return LocationType::find($atrtibutes['location_types_id'])->type;
            // },
            'region_id' => fake()->randomElement(range(1, 14)),
            'location_types_id' => fake()->randomElement(range(1, 6)),
            'name' => $name = fake()->unique()->randomElement($locations),
            'slug' => strtolower(str_replace(' ', '-',$name)),
        ];

        
    }
}
