<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'estudiante';
        $role->description = 'Estudiante';
        $role->save();

        $role = new Role();
        $role->name = 'tutor';
        $role->description = 'Tutor';
        $role->save();

        $role = new Role();
        $role->name = 'decano';
        $role->description = 'Decano de la facultad';
        $role->save();

        $role = new Role();
        $role->name = 'comision';
        $role->description = 'Comisión de Prácticas';
        $role->save();
    }
}
