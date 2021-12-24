<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin -> name      = 'Administrator';
        $admin -> username  = 'admin';
        $admin -> email     = 'admin@admin.test';
        $admin -> password  = bcrypt('password');
        $admin -> alamat    = 'Jl. Jayanegara No 17';
        $admin -> phone     = '083831585841';
        $admin -> role      = 'admin';
        $admin -> save();

        $admin = new User;
        $admin -> name      = 'User Tester';
        $admin -> username  = 'user';
        $admin -> email     = 'user@user.test';
        $admin -> password  = bcrypt('password');
        $admin -> alamat    = 'Jl. Jayanegara No 17';
        $admin -> phone     = '083831585841';
        $admin -> role      = 'guest';
        $admin -> save();
    }
}
