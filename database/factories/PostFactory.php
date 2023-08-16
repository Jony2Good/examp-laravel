<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $b = "image-" . mt_rand(1, 200) . ".png";

        return [
            'title' => fake()->name(),
            'content' => fake()->text(),
            'image' => $b,
            'likes' => fake()->randomNumber(1, 100),
            'is_published' => fake()->boolean(),

        ];
    }
}
