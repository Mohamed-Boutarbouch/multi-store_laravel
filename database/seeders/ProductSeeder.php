<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'codebarre' => '123456789',
                'nom' => 'Product 1',
                'prix_ht' => 10.99,
                'tva' => 0.10,
                'description' => 'Description for Product 1',
                'quantite' => 100,
                'store_id' => Store::where('slug', 'store-1')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '987654321',
                'nom' => 'Product 2',
                'prix_ht' => 19.99,
                'tva' => 0.10,
                'description' => 'Description for Product 2',
                'quantite' => 150,
                'store_id' => Store::where('slug', 'store-1')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '456789123',
                'nom' => 'Product 3',
                'prix_ht' => 15.50,
                'tva' => 0.10,
                'description' => 'Description for Product 3',
                'quantite' => 80,
                'store_id' => Store::where('slug', 'store-2')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '789123456',
                'nom' => 'Product 4',
                'prix_ht' => 25.75,
                'tva' => 0.20,
                'description' => 'Description for Product 4',
                'quantite' => 200,
                'store_id' => Store::where('slug', 'store-2')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '654321987',
                'nom' => 'Product 5',
                'prix_ht' => 8.25,
                'tva' => 0.20,
                'description' => 'Description for Product 5',
                'quantite' => 120,
                'store_id' => Store::where('slug', 'store-3')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '111111111',
                'nom' => 'Product 6',
                'prix_ht' => 12.99,
                'tva' => 0.10,
                'description' => 'Description for Product 6',
                'quantite' => 90,
                'store_id' => Store::where('slug', 'store-3')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '222222222',
                'nom' => 'Product 7',
                'prix_ht' => 9.75,
                'tva' => 0.10,
                'description' => 'Description for Product 7',
                'quantite' => 180,
                'store_id' => Store::where('slug', 'store-4')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codebarre' => '333333333',
                'nom' => 'Product 8',
                'prix_ht' => 17.50,
                'tva' => 0.10,
                'description' => 'Description for Product 8',
                'quantite' => 150,
                'store_id' => Store::where('slug', 'store-4')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
