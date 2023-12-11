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
            'name' => fake()->name(),
            'ingame_name' => fake()->name(),
            'id_game' => fake()->randomNumber(),
            'role' => fake()->name(),
            'team' => fake()->name(),
            'rank' => fake()->name(),
        ];
    }
}