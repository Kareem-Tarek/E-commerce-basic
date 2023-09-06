<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'       => fake()->title(),
            'price'       => fake()->randomNumber(4 , true) ,
            'description' => fake()->sentence(24),
            'category_id' => fake()->numberBetween(1 , 3),
            'updated_at'  => null,
        ];
    }
}
