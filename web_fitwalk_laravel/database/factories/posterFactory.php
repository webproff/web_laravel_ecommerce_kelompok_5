<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\poster>
 */
class posterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true), 
            'slug' => $this->faker->slug(), 
            'rating' => $this->faker->numberBetween(3, 5), 
            'sold' => $this->faker->numberBetween(1, 100), 
            'price' => $this->faker->randomFloat(3, 200000, 5000000), 
            'toko' => $this->faker->words(2, true), 
            'description' => $this->faker->paragraph(), 
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,2),
            
        ];
    }
}
