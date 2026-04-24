<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'User1',
            'email' => 'user1@gmail.com',
        ]);

        
        User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
        ]);

        
        User::factory()->create([
            'name' => 'User3',
            'email' => 'user3@gmail.com',
        ]);


        Role::create([
            'name' => 'admin',
            'description' => 'System Admin'
        ]);

        Role::create([
            'name' => 'user',
        ]);


    }
}
