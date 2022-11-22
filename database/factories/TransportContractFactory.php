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

        return [
            'panel_code' => Company::inRandomOrder()->first()->panel_code,
            'ContractNumber' => fake()->numerify('#########'),
            'ContractTitle' => Faker::word(),
            'ContractDate' => fake()->iso8601(),
            'CommissionPercent' => fake()->randomFloat(2,4,99),
            'Customer' => Faker::firstName(),
            'ComplementaryPercent' => fake()->randomFloat(2,4,99),
            'Description' => Faker::paragraph(),
            'IsActive' => fake()->boolean(),
            'IsContractDefault' => fake()->boolean(),
            'IsDefault_N0' => fake()->numberBetween(0, 3),
            'IsDefault_N1' => fake()->numberBetween(0, 3),
            'IsDefault_N2' => fake()->numberBetween(0, 3),
            'IsDefault_N3' => fake()->numberBetween(0, 3),
            'AfterDelivered' => getRandomCost(6),
            'N0_BaseFreight' => getRandomCost(6),
            'N0_PreFreight' => getRandomCost(5),
            'N0_RemFreight' => getRandomCost(6),
            'N0_Sleep' => getRandomCost(6),
            'N0_commission' => getRandomCost(6),
            'N0_Storage' => getRandomCost(5),
            'N0_Terminal' => getRandomCost(5),
            'N0_Scale' => getRandomCost(5),
            'N0_Insurance' => getRandomCost(5),
            'N0_Tonnage' => getRandomCost(6),
            'N0_Loading' => getRandomCost(7),
            'N0_Tax' => getRandomCost(6),
            'N0_InsuranceTax' => getRandomCost(6),
            'N0_TakeFromDriver' => getRandomCost(5),
            'N0_Stamp' => getRandomCost(6),
            'N0_TraceCode' => getRandomCost(5),
            'N0_Deductions' => getRandomCost(6),
            'N0_Antiseptic' => getRandomCost(5),
            'N0_Elambar' => getRandomCost(4),
            'N0_Unload' => getRandomCost(6),
            'N0_Complementary' => getRandomCost(5),
            'N1_BaseFreight' => getRandomCost(6),
            'N1_PreFreight' => getRandomCost(6),
            'N1_RemFreight' => getRandomCost(6),
            'N1_Sleep' => getRandomCost(6),
            'N1_commission' => getRandomCost(6),
            'N1_Storage' => getRandomCost(6),
            'N1_Terminal' => getRandomCost(6),
            'N1_Scale' => getRandomCost(6),
            'N1_Insurance' => getRandomCost(6),
            'N1_Tonnage' => getRandomCost(6),
            'N1_Loading' => getRandomCost(6),
            'N1_Tax' => getRandomCost(6),
            'N1_InsuranceTax' => getRandomCost(6),
            'N1_TakeFromDriver' => getRandomCost(6),
            'N1_Stamp' => getRandomCost(6),
            'N1_TraceCode' => getRandomCost(6),
            'N1_Deductions' => getRandomCost(6),
            'N1_Antiseptic' => getRandomCost(6),
            'N1_Elambar' => getRandomCost(6),
            'N1_Unload' => getRandomCost(6),
            'N1_Complementary' => getRandomCost(6),
            'N2_BaseFreight' => getRandomCost(5),
            'N2_PreFreight' => getRandomCost(5),
            'N2_RemFreight' => getRandomCost(5),
            'N2_Sleep' => getRandomCost(5),
            'N2_commission' => getRandomCost(5),
            'N2_Storage' => getRandomCost(5),
            'N2_Terminal' => getRandomCost(5),
            'N2_Scale' => getRandomCost(5),
            'N2_Insurance' => getRandomCost(5),
            'N2_Tonnage' => getRandomCost(5),
            'N2_Loading' => getRandomCost(5),
            'N2_Tax' => getRandomCost(5),
            'N2_InsuranceTax' => getRandomCost(5),
            'N2_TakeFromDriver' => getRandomCost(5),
            'N2_Stamp' => getRandomCost(5),
            'N2_TraceCode' => getRandomCost(5),
            'N2_Deductions' => getRandomCost(5),
            'N2_Antiseptic' => getRandomCost(5),
            'N2_Elambar' => getRandomCost(5),
            'N2_Unload' => getRandomCost(5),
            'N2_Complementary' => getRandomCost(5),
            'N3_BaseFreight' => getRandomCost(5),
            'N3_PreFreight' => getRandomCost(5),
            'N3_RemFreight' => getRandomCost(5),
            'N3_Sleep' => getRandomCost(5),
            'N3_commission' => getRandomCost(5),
            'N3_Storage' => getRandomCost(5),
            'N3_Terminal' => getRandomCost(5),
            'N3_Scale' => getRandomCost(5),
            'N3_Insurance' => getRandomCost(5),
            'N3_Tonnage' => getRandomCost(5),
            'N3_Loading' => getRandomCost(5),
            'N3_Tax' => getRandomCost(5),
            'N3_InsuranceTax' => getRandomCost(5),
            'N3_TakeFromDriver' => getRandomCost(5),
            'N3_Stamp' => getRandomCost(5),
            'N3_TraceCode' => getRandomCost(5),
            'N3_Deductions' => getRandomCost(5),
            'N3_Antiseptic' => getRandomCost(5),
            'N3_Elambar' => getRandomCost(5),
            'N3_Unload' => getRandomCost(5),
            'N3_Complementary' => getRandomCost(5),
            'def_Sleep' => getRandomCost(5),
            'def_Storage' => getRandomCost(5),
            'def_Scale' => getRandomCost(5),
            'def_Insurance' => getRandomCost(5),
            'def_Tonnage' => getRandomCost(5),
            'def_Loading' => getRandomCost(5),
            'def_InsuranceTax' => getRandomCost(5),
            'def_TakeFromDriver' => getRandomCost(5),
            'def_Stamp' => getRandomCost(5),
            'def_TraceCode' => getRandomCost(5),
            'def_Antiseptic' => getRandomCost(5),
            'def_Elambar' => getRandomCost(5),
            'def_Unload' => getRandomCost(5),



        ];
    }
}
