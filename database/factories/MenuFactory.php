<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->text(15),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(80, 150),
            'image' => fake()->imageUrl(80, 80),
            'available' => fake()->boolean(50),
            'discounted' => fake()->boolean(50),
            'discount' => fake()->randomFloat('1', 0.8, 0.9),
            'created_at' => fake()->dateTimeThisYear(),
        ];
    }
}
