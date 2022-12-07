<?php

namespace Database\Factories;

use App\Models\SenderReceiver;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Ybazli\Faker\Facades\Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sender_receiver_id'=>fake()->unique(10000)->randomElement(SenderReceiver::all()),
            'province_code'=>fake()->numerify('######'),
            'province_title'=>Faker::state(),
            'city_code'=>fake()->numerify('######'),
            'city_title'=>Faker::city(),
            'postal_code'=>fake()->numerify('########'),
            'warehouse_code'=>fake()->numerify('###########'),
            'address'=>Faker::address(),
            'description'=>Faker::paragraph(),
            'status'=>fake()->numberBetween(0,2)
        ];
    }
}
