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

        $arrayCarrera = ['Informatica', 'Telecomunicaciones', 'Electrica', 'Mecanica', 'Quimica', 'Fisica', 'Matematicas'];
        $arrayTelefono = ['3242020', '3252020', '3262121', '3272222', '3282323', '3292424', ''];
        $arrayCelular = ['Informatica', 'Telecomunicaciones', 'Electrica', 'Mecanica', 'Quimica', 'Fisica', 'Matematicas'];
        
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {

            \App\Models\Estudiante::create([
                'cedula' => $faker->numberBetween(1000000000, 9999999999),
                'correo' => $faker->unique()->email,
                'epn'=> $faker->numberBetween(100000000, 999999999),
                'carrera' => $arrayCarrera[rand(0,6)],
                'nombres' => $faker->name,
                'apellidos' => $faker->name,
                'telefono' => $faker->numberBetween(2000000, 7999999),
                'celular' => $faker->numberBetween(900000000, 999999999),
            ]);
        }
    }
}
