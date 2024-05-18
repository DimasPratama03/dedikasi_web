<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin One',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password123'), // Gantilah dengan password yang lebih aman
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin Two',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password123'), // Gantilah dengan password yang lebih aman
            'role' => 'admin',
        ]);
    }
}

