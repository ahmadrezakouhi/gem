<?php

namespace Database\Factories;

use App\Models\BillOfLading;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillPay>
 */
class BillPayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        return [
            'Bill_Id' => BillOfLading::inRandomOrder()->first()->id,
            'D_NationalCode'=> fake()->numerify('#######'),
            'D_Name'=> Faker::firstName(),
            'D_LastName'=> Faker::lastName(),
            'D_AccountNumber'=> fake()->numerify('######'),
            'D_Shaba'=>fake()->numerify('#######'),
            'D_AccountBank'=>fake()->numerify('######'),
            'D_Tel'=>fake()->phoneNumber(),
            'Description'=>Faker::sentence(),
            'ApplyTime'=>fake()->iso8601(),
            'Fee'=>getRandomCost(10),
            'UserId'=>$user->id,
            'UserName'=>$user->username,
            'status'=>fake()->boolean()
        ];
    }
}
