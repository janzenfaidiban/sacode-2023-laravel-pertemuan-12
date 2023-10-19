<?php

namespace Database\Seeders;

use App\Models\Articles;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articles::create(
            [
                'id' => 5,
                'title' => 'Learn Laravel 10',
                'short_description' => 'Fundamentals of Laravel 10 in SaCode.',
                'body' => 'coming soon'
            ]
        );
    }
}
