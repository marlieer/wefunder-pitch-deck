<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HighlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'index' => rand(0,10),
            'text'  => $this->faker->sentence(),
        ];
    }
}
