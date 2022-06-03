<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalRabbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
            $rabbit_Name="Flappie";
            DB::table('animal')-> insert([
                'name'=> $rabbit_Name,
                'kind'=> "Rabbit",
                'description'=> "Lief konijn",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,
            ]);
    }
}
