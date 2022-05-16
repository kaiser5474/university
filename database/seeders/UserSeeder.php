<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $id = DB::table('users')->insertGetId([
            'name' => 'Erick Lema', //Str::random(10),
            'username' => 'erick', //Str::random(10),
            'email' => 'erick@gmail.com', //$faker->email,
            'password' => Hash::make('password'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $id,
        ]);

    }
}
