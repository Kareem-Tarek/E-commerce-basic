<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
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
            'rating_level' => fake()->numberBetween(1 , 5),
            // 'customer_id'  => "" ,
            'product_id'   => fake()->numberBetween(1 , 10),
            // 'product_name' => "",
            'updated_at'   => null,
        ];
    }
}
