<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Articles;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articles::create([
            'title' => Str::random(10),
            'content' => Str::random(50),
            'status' => 'published',
            'user_id' => Str::random(1),
            'category_id' => Str::random(1),
        ]);
    }
}
