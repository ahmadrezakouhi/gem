<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \Ybazli\Faker\Facades\Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'panel_code'=>fake()->numerify('#######'),
            'name'=>fake()->company(),
            'company_code'=>fake()->numerify('#######'),
            'tel'=>fake()->phoneNumber(),
            'fax'=>fake()->phoneNumber(),
            'mobile'=>Faker::mobile(),
            'manager_name'=>Faker::firstName(),
            'manager_last_name'=>Faker::lastName(),
            'presentor_name'=>Faker::firstName(),
            'presentor_last_name'=>Faker::lastName()
        ];
    }
}
