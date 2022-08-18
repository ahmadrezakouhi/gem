<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Ybazli\Faker\Facades\Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'panel_code'=>Company::find(rand(1,20))->panel_code,
            'name'=>Faker::firstName(),
            'last_name'=>Faker::lastName(),
            'father_name'=>Faker::firstName(),
            'national_code'=>Faker::melliCode(),
            'birth_certificate_code'=>Faker::melliCode(),
            'driver_licence_number'=>fake()->numerify('##########'),
            'driver_licence_expire'=>fake()->date(),
            'driver_licence_type'=>fake()->numberBetween(0,2),
            'health_card_number'=>fake()->numerify('#########'),
            'health_card_expire'=>fake()->date(),
            'insurance_number'=>fake()->numerify('#########'),
            'smart_number'=>fake()->numerify('#########'),
            'smart_number_expire'=>fake()->date(),
            'vehicle_smart_number'=>fake()->numerify('#########'),
            'birth_date'=>fake()->date(),
            'city_of_birth'=>Faker::city(),
            'city_of_driver_licence'=>Faker::city(),
            'allowed_vehicle_type'=>fake()->numberBetween(1,3),
            'status'=>fake()->numberBetween(0,1),
            'organization_phone'=>Faker::mobile(),
            'phones'=>Faker::mobile(),
            'postal_code'=>fake()->numerify('#####-#####'),
            'start_activity'=>fake()->date(),
            'country'=>'ایران',
            'country_code'=>fake()->numerify('####'),
            'education'=>'دیپلم',
            'IBAN'=>fake()->numerify('####################'),
            'province'=>Faker::state(),
            'city'=>Faker::city(),
            'address'=>Faker::address(),
            'description'=>Faker::sentence()


        ];
    }
}
