<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DraftBillOfLading>
 */
class DraftBillOfLadingFactory extends Factory
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
            'issue_date'=>fake()->iso8601(),
            'draft_bill_of_lading_number'=>fake()->numerify('#######'),
            'from_number'=>fake()->numerify('########'),
            'to_number'=>fake()->numerify('#########'),
            'serial'=>fake()->numerify('#########'),
            'status_code'=>fake()->numberBetween(1,3),
            'status_title'=>Faker::word(),
            'description'=>Faker::paragraph()
        ];
    }
}
