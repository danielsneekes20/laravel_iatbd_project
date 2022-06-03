<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KindOfAnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_animal_array=["Dog","Cat","Rabbit","Fish"];
        foreach($kind_of_animal_array as $kind_of_animal){
            DB::table('kind_of_animal')->insert([
                'kind'=>$kind_of_animal
            ]);
        }
    }
}
