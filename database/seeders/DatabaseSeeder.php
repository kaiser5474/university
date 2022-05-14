<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        DB::table('users')->insert([
            'name' => Str::random(10),
            'username' => Str::random(10),
            'email' => $faker->email,
            'password' => Hash::make('password'),
        ]);
    }
}
