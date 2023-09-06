<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'your',
            'last_name' => 'name',
            'email' => 'doccie@moonbowstudios.net',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
