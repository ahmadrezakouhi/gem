<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
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
            'title'=>fake()->word(),
            'description'=>Faker::paragraph(),
            'font'=>'yekan',
            'unique'=>fake()->boolean(),
            'separator'=>',',
            'length'=>fake()->randomDigitNot(0)*10,
            'evaluated_field'=>'BI_Field_'.fake()->numberBetween(1,12),
            'is_draft'=>fake()->boolean(),
            'visible'=>fake()->boolean()

        ];
    }
}
