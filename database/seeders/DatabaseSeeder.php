<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('Password123!'),
        ]);

        User::factory()->create([
            'name' => 'guest',
            'email' => 'guest@example.com',
            'role' => 'user',
            'password' => bcrypt('Password123!'),
        ]);

        $this->call(StorySeeder::class);
    }
}
