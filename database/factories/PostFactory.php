<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $categoryIDs = Category::pluck('id');
        $userIDs = User::pluck('id');
        return [
            'title' => fake()->sentence(5),
            'description' => fake()->sentence(20),
            'category_id' => fake()->randomElement($categoryIDs),
            'user_id' => fake()->randomElement($userIDs)


        ];
    }
}