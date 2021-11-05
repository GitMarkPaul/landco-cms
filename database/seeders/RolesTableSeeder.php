<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate pre-defined admin roles

        Role::create([
            'role' => 'Creator',
            'excerpt' => 'User that has access to all the system settings codes'
        ]);

        Role::create([
            'role' => 'Administrator',
            'excerpt' => 'User that has access to system settings'
        ]);

        Role::create([
            'role' => 'Contributor',
            'excerpt' => 'User that has access to system settings'
        ]);

        Role::create([
            'role' => 'Author',
            'excerpt' => 'User that has access to system settings'
        ]);
        
        Role::create([
            'role'  => 'Editor',
            'excerpt'   => 'User that has access for editing files and have no access to system settings',
        ]);
    }
}
