<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'rohid ammar firdaus',
            'username' => 'rohid',
            // 'email' => 'rohidtzz@gmail.com',
            'role' => 'user',
            'password' => bcrypt('rohid123'),
        ]);

        User::create([
            'name' => 'elsya rahma aulia',
            'username' => 'elsya',
            // 'email' => 'elsya@gmail.com',
            'role' => 'user',
            'password' => bcrypt('elsya123'),
        ]);

    }
}
