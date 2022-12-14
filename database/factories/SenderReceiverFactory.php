<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Ybazli\Faker\Facades\Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SenderReceiverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $is_sender = fake()->boolean();
        $is_receiver = fake()->boolean();
        $boleanWithNull = [false,true,null];
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'national_code'=>Faker::melliCode(),
            'title'=>fake()->company(),
            'name'=>Faker::firstName(),
            'last_name'=>Faker::lastName(),
            'economic_code'=>fake()->numerify('##########'),
            'postal_code'=>fake()->numerify('##########'),
            'description'=>Faker::paragraph(),
            'province_code'=>fake()->numerify('####'),
            'province_title'=>Faker::state(),
            'city_code'=>fake()->numerify('###'),
            'city_title'=>Faker::city(),
            'tel'=>fake()->phoneNumber(),
            'mobile'=>Faker::mobile(),
            'fax'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'status'=>fake()->numberBetween(1,3),
            'is_sender'=>$is_sender,
            'is_receiver'=> !$is_sender && !$is_receiver ?? $is_receiver,
            'is_active'=>fake()->randomElement($boleanWithNull)
        ];
    }
}
