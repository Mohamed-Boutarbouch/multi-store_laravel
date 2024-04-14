<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::insert([
            [
                'name' => 'Store 1',
                'slug' => 'store-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Store 3',
                'slug' => 'store-3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Store 3',
                'slug' => 'store-3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Store 4',
                'slug' => 'store-4',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
