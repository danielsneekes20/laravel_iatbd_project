<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AnimalDogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
            $dog_Name="Joris";
            DB::table('animal')-> insert([
                'name'=> $dog_Name,
                'kind'=> "Dog",
                'description'=> "Lieve hond" . $dog_Name,
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,
            ]);
    }
}
