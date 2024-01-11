<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
        'username' => 'Admin',
        'role' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
        ]);
    }
}
