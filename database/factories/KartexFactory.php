<?php

namespace Database\Factories;

use App\Models\Cargo;
use App\Models\Cortex;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cortex>
 */
class CortexFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cargo = Cargo::inRandomOrder()->first();
        $order = $cargo->order;
        return [
            'panel_code'=>$order->panel_code,
            'cortex_number'=>fake()->numerify('########'),
            'cortex_date'=>fake()->iso8601(),
            'order_number'=>$order->order_number,
            'order_item'=>fake()->numerify('#######'),
            'title'=>$cargo->cargo_title,
            'explanation'=>$cargo->description,
            'package_code'=>$cargo->package_code,
            'package_title'=>$cargo->package_title,
            'weight'=>$cargo->weight,
            'quantity'=>$cargo->quantity,
            'value'=>$cargo->value,
            'owner'=>$cargo->owner,
            'loading_location'=>$cargo->loadin_location,
            'traffic'=>$cargo->traffic,
            'incendiary'=>$cargo->incendiary,
            'traffic_zone'=>$cargo->traffic_zone,
            'remainder_order'=>fake()->numberBetween(1,10),
            'sender_code'=>$order->sender_code,
            'sender_name'=>$order->sender_name,
            'sender_last_name'=>$order->sender_last_name,
            'sender_city'=>$order->sender_city,
            'sender_national_code'=>$order->sender_national_code,
            'sender_storage_code'=>$order->sender_storage_code,
            'sender_postal_code'=>$order->sender_postal_code,
            'receiver_code'=>$order->sender_code,
            'receiver_name'=>$order->sender_name,
            'receiver_last_name'=>$order->sender_last_name,
            'receiver_city'=>$order->sender_city,
            'receiver_national_code'=>$order->sender_national_code,
            'receiver_storage_code'=>$order->sender_storage_code,
            'receiver_postal_code'=>$order->sender_postal_code,
            'description'=>Faker::paragraph()
        ];
    }
}
