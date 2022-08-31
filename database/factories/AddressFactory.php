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
            'sender_receiver_id'=>SenderReceiver::find(rand(1,19))->id,
            'province'=>Faker::state(),
            'city'=>Faker::city(),
            'postal_code'=>fake()->numerify('#####-#####'),
            'address'=>Faker::address(),
            'status'=>fake()->numberBetween(0,2)
        ];
    }
}
