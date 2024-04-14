<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User 1',
            'username' => 'test1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('user1234')
        ]);

        User::create([
            'name' => 'Test User 2',
            'username' => 'test2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('user1234')
        ]);
    }
}
