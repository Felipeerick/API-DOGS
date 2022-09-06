<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [
            "name" => $this->faker->unique()->firstName(),
            "age" => $this->faker->numberBetween(4, 25),
            "race" => $this->faker->unique()->lastName(),
        ];
    }
}
