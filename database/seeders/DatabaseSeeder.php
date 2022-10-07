<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create(); 
        $this->command->info('Admin user created.');
        
        //must exist to be used in location
        \App\Models\Region::factory(14)->create();
        $this->command->info('Regions created.');
        // //must exist to be used in location
        \App\Models\LocationType::factory(6)->create();
        $this->command->info('Location Types created.');

        
        // //must exist to be used in grave ---------------
        \App\Models\GraveType::factory(2)->create(); 
        $this->command->info('Grave Types created.');
        
        // //must exist to be used in graveyard
        \App\Models\Location::factory(15)->create();
        $this->command->info('Locations created.');

        
        // //must exist to be used in section and grave
        \App\Models\graveyard::factory(10)->create(); 
        $this->command->info('Graveyards created.');

        // //must exist to be used in and grave
        \App\Models\Sections::factory(10)->create(); 
        $this->command->info('Sections created.');

    
        \App\Models\grave::factory(100)->create(); 
        $this->command->info('Graves created.');

        \App\Models\deceased::factory(25)->create(); 
        $this->command->info('Deceased created.');
        
    }
}
