<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::all()->random()->id,
            'title' => fake()->unique()->sentence(1),
            'description' => fake()->paragraphs(8, true),
            'published' => fake()->boolean(),
            'price' => fake()->randomNumber(1, 100),
        ];
    }
}
