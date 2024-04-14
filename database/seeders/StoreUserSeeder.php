<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve users and stores
        $users = User::all();
        $stores = Store::all();

        // Loop through each user and associate them with stores
        foreach ($users as $user) {
            // Take first two stores for the first user, and next two for the second user
            $userStores = $stores->splice(0, 2);
            $user->stores()->attach($userStores->pluck('id'));
        }
    }
}
