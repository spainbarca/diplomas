<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $admin=new User;
        $admin->name = 'Noah';
        $admin->email= 'test@test.com';
        $admin->password = bcrypt('Test2022@');
        $admin->role_id= '1';
        $admin->save();

        $admin=new User;
        $admin->name = 'Phineas Ferb';
        $admin->email= 'test2@test.com';
        $admin->password = bcrypt('Test2022@');
        $admin->role_id= '2';
        $admin->save();

        $admin=new User;
        $admin->name = 'Charles Xavier';
        $admin->email= 'test3@test.com';
        $admin->password = bcrypt('Test2022@');
        $admin->role_id= '3';
        $admin->save();
    }
}
