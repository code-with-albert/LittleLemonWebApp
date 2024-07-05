<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialsMenu>
 */
class SpecialsMenuFactory extends Factory
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
            'menu_id' => fake()->unique()->numberBetween(1, 7),
            'created_at' => fake()->dateTimeThisYear(),
        ];
    }
}
