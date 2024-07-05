<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating' => fake()->numberBetween(1, 5),
            'user_id' => User::all()->random()->id,
            'comment' => fake()->text(),
            'reported' => false,
            'deleted' => false,
            'created_at' => fake()->dateTimeThisYear(),
        ];
    }
}
