<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responses')-> insert([
            'id'=>6,
            'sitterId'=>2,
            'ownerID'=> 3,
            'animalId'=> 1,
            'animalName'=>"Thijs",
            'sitterName'=>"Daniel",
        ]);
    
    }
}
