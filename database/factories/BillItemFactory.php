<?php

namespace Database\Factories;

use App\Models\BillOfLading;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class BillItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {



        return [
            'Bill_Id' => BillOfLading::inRandomOrder()->first()->id,
            'Draft_Number' => fake()->numerify('######') ,
            'Draft_Serial' => fake()->numerify('#######') ,
            'Order_Number' => fake()->numerify('#######'),
            'Kartex_Number' => fake()->numerify('#######'),
            'M_Name' => Faker::word(),
            'M_NameCode' => fake()->numerify('######') ,
            'M_OriginWeigth' => fake()->numberBetween(1000,100000),
            'M_PackCount' => fake()->numerify('#####'),
            'M_LoadLocation' => Faker::city(),
            'M_LoadLocationCode' => fake()->numerify('#####'),
            'M_Value' => getRandomCost(10) ,
            'M_Description' => Faker::sentence(),
            'M_TraficStatus' => fake()->boolean() ,
            'M_FireStatus' => fake()->boolean(),
            'M_PlanStatus' => fake()->boolean(),
            'M_PacketType' => Faker::word(),
            'M_PacketTypeCode' => fake()->numerify('#####') ,
            'M_LoadOwner' => Faker::lastName(),
            'M_LoadingOwnerCode' => fake()->numerify('#####') ,
            'M_IranCode' => fake()->numerify('#####') ,
            'M_DestinationWeigth' => fake()->numberBetween(1000,100000) ,
            'BI_Field1' => Faker::word(),
            'BI_Field2' => Faker::word(),
            'BI_Field3' => Faker::word(),
            'BI_Field4' => Faker::word(),
            'BI_Field5' => Faker::word(),
            'BI_Field6' => Faker::word(),
            'BI_Field7' => Faker::word(),
            'BI_Field8' => Faker::word(),
            'BI_Field9' => Faker::word(),
            'BI_Field10' => Faker::word(),
            'BI_Field11' => Faker::word(),
            'BI_Field12' => Faker::word(),
            'BI_ItemNumber' => fake()->numerify('######'),
            'BI_Delivered' => fake()->boolean(),
            'BI_DeliveredTime' => fake()->iso8601() ,
            'BI_DeliverUserId' => fake()->numerify('######'),
            'BI_DeliverUserName' => fake()->userName() ,
        ];
    }




}
