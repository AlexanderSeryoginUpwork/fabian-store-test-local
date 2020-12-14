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
        ]);
        User::create([
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => bcrypt('123456')
        ]);
    }
}
