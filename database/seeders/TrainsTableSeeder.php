<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        {
            for ($i=0; $i < 20; $i++) { 
                
                $train = new Train();

                $train->company = $faker->company(); 
                $train->departure_station = $faker->city(); 
                $train->arrival_station = $faker->city(); 
                $train->departure_time = $faker->date(); 
                $train->arrival_time = $faker->date(); 
                $train->train_code = $faker->randomNumber(6, true);
                $train->carriages_number = $faker->numberBetween(2, 20); 
                $train->in_time = $faker->boolean(); 
                $train->cancelled = $faker->boolean(); 

                $train->save();
            }
        }
    }
}
