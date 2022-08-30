<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Ybazli\Faker\Facades\Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SenderReciverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'panel_code'=>Company::find(rand(1,20))->panel_code,
            'national_code'=>Faker::melliCode(),
            'title'=>fake()->company(),
            'name'=>Faker::firstName(),
            'last_name'=>Faker::lastName(),
            'economic_code'=>fake()->numerify('##########'),
            'postal_code'=>fake()->numerify('######-######'),
            'description'=>Faker::paragraph(),
            'address'=>Faker::address(),
            'tel'=>fake()->phoneNumber(),
            'mobile'=>Faker::mobile(),
            'fax'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'status'=>fake()->numberBetween(1,3),
        ];
    }
}
