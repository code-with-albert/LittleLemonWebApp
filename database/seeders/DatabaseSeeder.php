<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\SpecialsMenu;
use App\Models\User;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create(
            [
                'first_name' => 'Lola Nena',
                'last_name' => 'Cruz',
                'image' => 'images/Lola Nena.jpg',
                'email' => 'admin@example.com',
                'password' => Hash::make('password')
            ]
        );
        Review::factory()->create(
            [
                'rating' => 3,
                'user_id' => 1,
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.'
            ]
        );

        $specials = array(
            [
                'id' => 1,
                'name' => 'Tapsilog',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Tapsilog.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
            [
                'id' => 2,
                'name' => 'Sizzling Sisig',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 90,
                'image' => 'images/foods/Sizzling Sisig.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',

            ],
            [
                'id' => 3,
                'name' => 'Sizzling Hotdog',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Sizzling Hotdog.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
            [
                'id' => 4,
                'name' => 'Hotsilog',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Hotsilog.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
            [
                'id' => 5,
                'name' => 'Pork Menudo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Pork Menudo.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
            [
                'id' => 6,
                'name' => 'Pork Adobo',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Pork Adobo.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
            [
                'id' => 7,
                'name' => 'Longsilog',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => 120,
                'image' => 'images/foods/Longsilog.jpg',
                'available' => 1,
                'discounted' => fake()->boolean(50),
                'discount' => '0.9',
            ],
        );
        foreach ($specials as $item) {
            Menu::factory()->create($item);
        }

        User::factory(10)->create();
        Review::factory(10)->create();
        SpecialsMenu::factory(5)->create();
    }
}
