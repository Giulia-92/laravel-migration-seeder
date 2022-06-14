<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $newTravel = new Travel();
        $newTravel ->title = $faker->name();
        $newTravel ->address = $faker->streetAddress();
        //$newTravel ->day = $faker->unique() ;
        $newTravel ->dateinizio = $faker->streetAddress();
        $newTravel ->datefine = $faker->streetAddress();
        $newTravel->save();
        }
        
    }
}
