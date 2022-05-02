<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //Estudiante::truncate();

        $faker = \Faker\Factory::create();

        $arrayValues = ['Informatica', 'Telecomunicaciones', 'Electrica', 'Mecanica', 'Quimica', 'Fisica', 'Matematicas'];
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {

            \App\Models\Estudiante::create([
                'cedula' => $faker->numberBetween(1000000000, 9999999999),
                'correo' => $faker->unique()->email,
                'epn'=> $faker->numberBetween(1000000000, 9999999999),
                'carrera' => $arrayValues[rand(0,6)],
                'nombres' => $faker->name,
                'apellidos' => $faker->name,
            ]);
        }
    }
}
