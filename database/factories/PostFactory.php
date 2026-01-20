<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraphs(5, true),
            'excerpt' => $this->faker->sentence(12),
            'views' => $this->faker->numberBetween(0, 5000),
            'category' => $this->faker->randomElement(['Tech', 'News', 'Gaming', 'Education']),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_published' => $this->faker->boolean(80),
        ];
    }
}
