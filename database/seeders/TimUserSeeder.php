<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Tim',
            'last_name' => 'Slager',
            'email' => 'timslager2003@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);
    }
}
