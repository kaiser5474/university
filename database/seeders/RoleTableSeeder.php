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
    }
}
