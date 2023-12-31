<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filePath = storage_path('app/public/photoUploads');
        return [


            'title' => fake()->unique()->name(),
            'description' => fake()->realText( 250 ,2),
            'user_id' => User::inRandomOrder()->first()->id,

        ];
    }
}
