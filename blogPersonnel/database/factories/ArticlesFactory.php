<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'status' => 'published',
            'user_id' => fake()->randomElement([1, 2, 3]),
            'category_id' => fake()->randomElement([1, 2, 3]),
        ];
    }
}
