<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Declare the Seeder Class
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
