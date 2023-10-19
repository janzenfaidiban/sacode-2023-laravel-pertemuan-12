<?php

namespace Database\Seeders;

use App\Models\Products;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create(
            [
                'title' => 'Vietnam Drip',
                'description' => 'Coffee and Milk',
                'price' => 25000,
                'cover' => 'images/coffee/vietnam-rip.jpg',
                'status' => 'Publish',
            ]
        );
    }
}
