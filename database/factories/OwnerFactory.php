<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'code'=>fake()->numerify('########'),
            'name'=>Faker::firstName(),
            'last_name'=>Faker::lastName(),
            'phones'=>Faker::mobile()
        ];
    }
}
