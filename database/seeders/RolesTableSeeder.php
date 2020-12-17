<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('manage as admin');

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('manage as user');

        $role = Role::create(['name' => 'guest']);
        $role->givePermissionTo('manage as guest');
    }
}
