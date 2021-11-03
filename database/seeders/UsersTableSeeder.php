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
            'username' => 'Admin',
            'name' => 'Administrator',
            'email'	=> 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin@web2021'),
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);
    }
}
