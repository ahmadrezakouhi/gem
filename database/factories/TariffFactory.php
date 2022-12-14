<?php

namespace Database\Factories;

use App\Models\Insurance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tariff>
 */
class TariffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'insurance_id'=>Insurance::inRandomOrder()->first()->id,
            'min_value'=>getRandomCost(6),
            'max_value'=>getRandomCost(10),
            'value_bigger_than'=>getRandomCost(5),
            'cargo_group_code'=>null,
            'cargo_group_title'=>null,
            'variable_value'=>getRandomCost(7),
            'constant_value'=>getRandomCost(6),
            'description'=>Faker::paragraph()
        ];
    }
}
