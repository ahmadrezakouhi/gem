<?php

namespace Database\Factories;

use App\Models\BillItem;
use App\Models\Company;
use App\Models\SenderReceiver;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shortcut>
 */
class ShortcutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bill_item = BillItem::inRandomOrder()->first();
        return [
            'panel_code' => Company::inRandomOrder()->first()->panel_code,
            'short_cut' => 'ctrl ' . fake()->randomAscii(),
            'sender_code' => SenderReceiver::inRandomOrder()->first()->id,
            'receiver_code' => SenderReceiver::inRandomOrder()->first()->id,
            'cargo_code' => $bill_item->id,
            'cargo_description' => $bill_item->M_Description,
            'package_code' => fake()->numerify('######'),
            'owner_code' => fake()->randomElement(Owner::all())->id,
            'location_loading_code' => fake()->numerify('######'),
            'weight' => fake()->numberBetween(1000, 10000),
            'quantity' => fake()->numberBetween(1, 100000),
            'value' => getRandomCost(10),


        ];
    }
}
