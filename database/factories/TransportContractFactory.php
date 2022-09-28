<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransportContract>
 */
class TransportContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $set_values = ['unknown','rental','own','independent'];
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'contract_number'=>fake()->numerify('#######'),
            'contract_title'=>Faker::word(),
            'contract_date'=>fake()->iso8601(),
            'commission_persent'=>fake()->randomFloat($nbMaxDecimal=2,$min=0,$max=50),
            'customer_name'=>Faker::firstName(),
            'customer_last_name'=>Faker::lastName(),
            'driver_insurance_commission'=>fake()->randomFloat($nbMaxDecimal=2,$min=0,$max=50),
            'description'=>Faker::paragraph(),
            'is_active'=>fake()->boolean(),
            'is_carriage_forward'=>fake()->boolean(),
            'is_unknown'=>fake()->boolean(),
            'is_rental'=>fake()->boolean(),
            'is_own'=>fake()->boolean(),
            'is_independent'=>fake()->boolean(),
            'fixed_cost'=>getRandomCost(9),
            'fixed_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_fixed_cost_for_receiver'=>fake()->boolean(),
            'loading_cost'=>getRandomCost(6),
            'loading_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_loading_cost_for_receiver'=>fake()->boolean(),
            'weighbridge_price'=>getRandomCost(5),
            'weighbridge_price_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_weighbridge_price_for_receiver'=>fake()->boolean(),
            'storage_cost'=>getRandomCost(5),
            'storage_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_storage_cost_for_receiver'=>fake()->boolean(),
            'unloading_cost'=>getRandomCost(6),
            'unloading_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_unloading_cost_for_receiver'=>fake()->boolean(),
            'online_cost'=>getRandomCost(4),
            'online_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_online_cost_for_receiver'=>fake()->boolean(),
            'overload_cost'=>getRandomCost(6),
            'overload_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_overload_cost_for_receiver'=>fake()->boolean(),
            'stamp_cost'=>getRandomCost(5),
            'stamp_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_stamp_cost_for_receiver'=>fake()->boolean(),
            'sleep_cost'=>getRandomCost(5),
            'sleep_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_sleep_cost_for_receiver'=>fake()->boolean(),
            'commission'=>getRandomCost(6),
            'commission_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_commission_for_receiver'=>fake()->boolean(),
            'excess_baggage_fee'=>getRandomCost(6),
            'excess_baggage_fee_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_excess_baggage_fee_for_receiver'=>fake()->boolean(),
            'insurance_cost'=>getRandomCost(5),
            'insurance_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_insurance_cost_for_receiver'=>fake()->boolean(),
            'disinfectant_cost'=>getRandomCost(5),
            'disinfectant_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_disinfectant_cost_for_receiver'=>fake()->boolean(),
            'driver_insurance_cost'=>getRandomCost(8),
            'driver_insurance_cost_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_driver_insurance_cost_for_receiver'=>fake()->boolean(),
            'tax'=>getRandomCost(6),
            'tax_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_tax_for_receiver'=>fake()->boolean(),
            'insurance_tax'=>getRandomCost(5),
            'insurance_tax_for_driver'=>fake()->randomElements($set_values,$count=fake()->numberBetween(0,4)),
            'is_insurance_tax_for_receiver'=>fake()->boolean()




        ];
    }
}
