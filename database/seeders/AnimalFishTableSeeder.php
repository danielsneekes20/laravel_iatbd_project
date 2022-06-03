<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AnimalFishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
            $fish_Name="Blub";
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>2,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>2,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>2,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
            DB::table('animal')-> insert([
                'name'=> $fish_Name,
                'kind'=> "Fish",
                'description'=> "Lieve vies",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,

            ]);
    }
}
