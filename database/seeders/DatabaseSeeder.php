<?php

namespace Database\Seeders;

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
        $this->call([
            RolesTableSeeder::class,
            UserTableSeeder::class,
            KindOfAnimalTableSeeder::class,
            AnimalDogTableSeeder::class,
            AnimalFishTableSeeder::class,
            AnimalCatTableSeeder::class,
            AnimalRabbitTableSeeder::class,
        ]);
    }
}
