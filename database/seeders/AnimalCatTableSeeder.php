<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
            $cat_Name="Pluk";
            DB::table('animal')-> insert([
                'name'=> $cat_Name,
                'kind'=> "Cat",
                'description'=> "Lieve kat",
                'hourly'=> 15.00,
                'important'=> "kut beest",
                'user_id'=>1,
            ]);
    }
}
