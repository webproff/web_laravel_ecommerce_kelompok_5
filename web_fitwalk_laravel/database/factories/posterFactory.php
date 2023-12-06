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
            'title' => $this->faker->sentence(mt_rand(2,8)), 
            'slug' => $this->faker->slug(), 
            'ras' => $this->faker->paragraph(mt_rand(1,2)), 
            'gender' => $this->faker->sentence(mt_rand(10,14)), 
            'user_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,2),
            
        ];
    }
}
