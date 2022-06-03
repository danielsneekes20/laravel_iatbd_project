<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
            'id'=>1,
            'name'=>"daniel",
            'email'=>"banned@hotmail.com",
            'password'=>bcrypt("hallo123"),
            'lastname'=>"sneekes",
            'phonenumber'=> 0642103637,
            'age'=> 21,
            'country'=> "nl",
            'description'=> "hoi",
            'zipcode'=> "ererf",
            'role'=> "Guest",
            'banned'=>'1',
        ]);
        DB::table('users')-> insert([
            'id'=>2,
            'name'=>"daniel",
            'email'=>"danieksneekes@hotmail.com",
            'password'=>bcrypt("hallo123"),
            'lastname'=>"sneekes",
            'phonenumber'=> 0642103637,
            'age'=> 21,
            'country'=> "nl",
            'description'=> "hoi",
            'zipcode'=> "ererf",
            'role'=> "Guest",
        ]);
        DB::table('users')-> insert([
            'id'=>3,
            'name'=>"daniel",
            'email'=>"Danieladmin@hotmail.com",
            'password'=>bcrypt("hallo123"),
            'lastname'=>"sneekes",
            'phonenumber'=> 0642103637,
            'age'=> 21,
            'country'=> "nl",
            'description'=> "hoi",
            'zipcode'=> "ererf",
            'role'=> "Admin",
        ]);
    }
}

