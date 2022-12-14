<?php

namespace Database\Factories;

use App\Models\BillItem;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kartex>
 */
class KartexFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $billItem = BillItem::inRandomOrder()->first();
        $order = Order::inRandomOrder()->first();
        return [
            'panel_code' => $order->panel_code,
            'kartex_number' => fake()->numerify('########'),
            'kartex_date' => fake()->iso8601(),
            'order_number' => $order->order_number,
            'order_item' => fake()->numerify('#######'),
            'title' => $billItem->M_Name,
            'explanation' => $billItem->M_Description,
            'package_code' => $billItem->M_PacketTypeCode,
            'package_title' => $billItem->M_PacketType,
            'weight' => $billItem->M_OriginWeight,
            'quantity' => $billItem->M_PackCount,
            'value' => $billItem->M_Value,
            'owner' => $billItem->M_LoadOwner,
            'loading_location' => $billItem->M_LoadLocation,
            'traffic_status' => $billItem->M_TraficStatus,
            'fire_status' => $billItem->M_FireStatus,
            'plan_status' => $billItem->M_PlanStatus,
            'remainder_order' => fake()->numberBetween(1, 10),
            'sender_code' => $order->sender_code,
            'sender_name' => $order->sender_name,
            'sender_last_name' => $order->sender_last_name,
            'sender_city' => $order->sender_city,
            'sender_national_code' => $order->sender_national_code,
            'sender_storage_code' => $order->sender_storage_code,
            'sender_postal_code' => $order->sender_postal_code,
            'receiver_code' => $order->sender_code,
            'receiver_name' => $order->sender_name,
            'receiver_last_name' => $order->sender_last_name,
            'receiver_city' => $order->sender_city,
            'receiver_national_code' => $order->sender_national_code,
            'receiver_storage_code' => $order->sender_storage_code,
            'receiver_postal_code' => $order->sender_postal_code,
            'description' => Faker::paragraph()
        ];
    }
}
