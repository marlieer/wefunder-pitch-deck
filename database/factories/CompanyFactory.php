<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $company = $this->faker->company();
        $companySnakeCase = Str::snake($company);
        return [
            'name'      => $company,
            'website'   => 'http://' . $companySnakeCase . '.com',
            'location'  => $this->faker->city() . ', ' . $this->faker->stateAbbr(),
            'twitter'   => 'https://twitter.com/' . $companySnakeCase,
            'facebook'  => 'https://facebook.com/' . $companySnakeCase,
            'instagram' => 'https://instagram.com/' . $companySnakeCase,
            'linked_in' => 'https://linkedin.com/' . $companySnakeCase
        ];
    }
}
