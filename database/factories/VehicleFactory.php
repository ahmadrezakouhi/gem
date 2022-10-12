<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $vehicle_types = ['وانت بار','عمومی','زیر بیست کیلومتر'];
        $loading_types = ['18 چرخ','کامیونت'];
        $colors = ['سفید','مشکی','قرمز','نارنجی','بنفش'];
        $brand_titles = ['ولوو','رنو','بنز','ماک'];
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'number_plate'=>fake()->numerify('######'),
            'number_plate_zone'=>fake()->numerify('##'),
            'number_plate_type'=>fake()->numberBetween(0,1),
            'numbering_location_code'=>fake()->numerify('#########'),
            'numbering_location'=>Faker::city(),
            'smart_number'=>fake()->numerify('#######'),
            'smart_number_expire'=>fake()->iso8601(),
            'VIN'=>fake()->numerify('#################'),
            'allowed_driver_licence'=>fake()->numberBetween(1,3),
            'vehicle_type'=>fake()->randomElement($vehicle_types),
            'owner_mobile'=>Faker::mobile(),
            'production'=>fake()->numberBetween(1920,2022),
            'loading_type_code'=>fake()->numerify('######'),
            'loading_type_title'=>fake()->randomElement($loading_types),
            'type_code'=>fake()->numerify('######'),
            'type_title'=>null,
            'status'=>fake()->boolean(),
            'inspection_number'=>fake()->numerify('##########'),
            'inspection_expire'=>fake()->iso8601(),
            'insurance_number'=>fake()->numerify('#########'),
            'insurance_expire'=>fake()->iso8601(),
            'color'=>fake()->randomElement($colors),
            'brand_code'=>fake()->numerify('#########'),
            'brand_title'=>fake()->randomElement($brand_titles),
            'vehicle_type'=>fake()->numerify('L##N##'),
            'number_of_allowed_draft'=>fake()->numerify(1,10),
            'day_of_allowed_draft'=>fake()->numerify(1,10),
            'number_of_allowed_bill_of_lading'=>fake()->numerify(1,10),
            'day_of_allowed_bill_of_lading'=>fake()->numerify(1,10),
            'number_of_unconfirmed_draft'=>fake()->numerify(1,10),
            'number_of_unconfirmed_bill_of_lading'=>fake()->numerify(1,10),
            'capacity'=>fake()->numerify(1000,10000),
            'weight'=>fake()->numerify(1000,10000),
            'loading_length'=>fake()->numerify(1,10),
            'loading_width'=>fake()->numerify(1,10),
            'has_roll'=>fake()->boolean(),
            'chassis_number'=>fake()->numerify('##########'),
            'document_number'=>fake()->numerify('##########'),
            'violation'=>fake()->boolean(),
            'description'=>Faker::paragraph(),
            'engine_number'=>fake()->numerify('###########'),
            'document_date'=>fake()->iso8601(),
            'owner_status'=>fake()->numberBetween(1,4)




        ];
    }
}
