<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\SenderReceiver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $sender = SenderReceiver::where('is_sender',true)->inRandomOrder()->first();
        $receiver = SenderReceiver::where('is_receiver',true)->inRandomOrder()->first();
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'order_number'=>fake()->numerify('#########'),
            'order_date'=>fake()->iso8601(),
            'transaction_number'=>fake()->numerify('#########'),
            'transaction_date'=>fake()->iso8601(),
            'request_number'=>fake()->numerify('#########'),
            'request_date'=>fake()->iso8601(),
            'buyer_agent_name'=>Faker::firstName(),
            'buyer_agent_last_name'=>Faker::lastName(),
            'seller_agent_name'=>Faker::firstName(),
            'seller_agent_last_name'=>Faker::lastName(),
            'sender_code'=>$sender->economic_code,
            'sender_name'=>$sender->name,
            'sender_last_name'=>$sender->last_name,
            'sender_city'=>$sender->city_title,
            'sender_address'=>$sender->addresses()->inRandomOrder()->first() ? $sender->addresses()->inRandomOrder()->first()->address : null,
            'sender_national_code'=>$sender->national_code,
            'sender_postal_code'=>$sender->postal_code,
            'sender_phones'=>$sender->mobile,
            'receiver_code'=>$receiver->economic_code,
            'receiver_name'=>$receiver->name,
            'receiver_last_name'=>$receiver->last_name,
            'receiver_city'=>$receiver->city_title,
            'receiver_address'=>$receiver->addresses()->inRandomOrder()->first() ? $receiver->addresses()->inRandomOrder()->first()->address : null,
            'receiver_national_code'=>$receiver->national_code,
            'receiver_postal_code'=>$receiver->postal_code,
            'receiver_phones'=>$receiver->mobile,
            'description'=>Faker::paragraph()
        ];
    }
}
