<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456')
        ])->givePermissionTo('manage as admin');
        ;
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('123456')
        ])->givePermissionTo('manage as user');

        User::create([
            'name' => 'guest',
            'email' => 'guest@example.com',
            'password' => bcrypt('123456')
        ])->givePermissionTo('manage as guest');
    }
}
