<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'spv_man_admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'employee',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'head',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'security',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}
