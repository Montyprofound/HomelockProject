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
        // Create admin user from environment variables
        if (env('ADMIN_EMAIL') && env('ADMIN_PASSWORD')) {
            User::create([
                'name' => env('ADMIN_NAME', 'Admin'),
                'email' => env('ADMIN_EMAIL'),
                'password' => \Illuminate\Support\Facades\Hash::make(env('ADMIN_PASSWORD')),
            ]);
        }
    }
}
