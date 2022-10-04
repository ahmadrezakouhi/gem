<?php

namespace Database\Factories;

use App\Models\BillOfLading;
use App\Models\Cargo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {



        return [
            'bill_of_lading_id'=>fake()->unique($maxRetries = 1000000)->randomElement(BillOfLading::all())->id,
            'cargo_code'=>fake()->numerify('########'),
            'cargo_title'=>Faker::word(),
            'package_code'=>fake()->numerify('##########'),
            'package_title'=>Faker::word(),
            'description'=>Faker::paragraph(),
            'weight'=>fake()->numberBetween(1000,3000),
            'quantity'=>fake()->numberBetween(),
            'value'=>getRandomCost(9),
            'owner'=>Faker::firstName(),
            'location_loading'=>Faker::city(),
            'traffic'=>fake()->boolean(),
            'incendiary'=>fake()->boolean(),
            'traffic_zone'=>fake()->boolean(),
            'logistic_code'=>fake()->numerify('########'),
            'logistic_title'=>Faker::word()
        ];
    }




}
