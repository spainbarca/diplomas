<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $role=new Role();
        $role->name = 'Administrador';
        $role->save();

        $role=new Role();
        $role->name = 'Usuario';
        $role->save();

        $role=new Role();
        $role->name = 'Moderador';
        $role->save();
    }
}
