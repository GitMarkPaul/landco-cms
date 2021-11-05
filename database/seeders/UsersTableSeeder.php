<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate pre-defined admin users

        User::create([
            'username' => 'Creator',
            'name' => 'Super Administrator',
            'email'	=> 'creator@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('creator@web2021'),
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);

        User::create([
            'username' => 'Admin',
            'name' => 'Administrator',
            'email'	=> 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);
    }
}
