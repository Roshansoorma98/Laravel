<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' =>fake()->name(),
            'product_num' =>fake()->buildingNumber(),
            'product_cost' =>fake()->numberBetween(300,400),
            'product_validation' =>fake()->dateTime()
        ];
    }
}
