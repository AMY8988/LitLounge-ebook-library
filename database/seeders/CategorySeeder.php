<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Romance" , "Action" , "Sci-Fi" , "Cartoon" , "Drama"];
        foreach ($categories as $category){
            Category::factory()->create([
               "name" => $category,
               "user_id" => User::inRandomOrder()->first()->id,
               
            ]);
        }
    }
}
