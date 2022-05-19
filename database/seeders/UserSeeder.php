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
        //Subdecano o admin
        $id = DB::table('users')->insertGetId([
            'name' => 'Erick Lema', //Str::random(10),
            'username' => '123456789', //El username funciona como EPN Str::random(10),
            'email' => 'erick@gmail.com', //$faker->email,
            'password' => Hash::make('password'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $id,
        ]);

        //comisión de prácticas 
        $id = DB::table('users')->insertGetId([
            'name' => 'Luis Lopez', //Str::random(10),
            'username' => '234567890', //Str::random(10),
            'email' => 'luis@gmail.com', //$faker->email,
            'password' => Hash::make('password'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 5,
            'user_id' => $id,
        ]);

        //decano de la facultad. 
        $id = DB::table('users')->insertGetId([
            'name' => 'Jorge Gomez', //Str::random(10),
            'username' => '345678912', //Str::random(10),
            'email' => 'jorge@gmail.com', //$faker->email,
            'password' => Hash::make('password'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => $id,
        ]);

    }
}
