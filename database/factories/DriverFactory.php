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
            'national_code' => Faker::melliCode(),
            'name' => Faker::firstName(),
            'last_name' => Faker::lastName() ,
            'father_name' => Faker::firstName() ,
            'birth_city_code' => fake()->iso8601() ,
            'smart_number' => fake()->numerify('#######') ,
            'birth_certificate_code' => fake()->numerify('########'),
            'insurance_branch' => Faker::word() ,
            'insurance_id' => fake()->numerify('#########'),
            'CertificateNumber' => fake()->numerify('#########') ,
            'smart_number_expire' => fake()->iso8601() ,
            'driver_type' => fake()->numerify('###') ,
            'driver_licence_type' => fake()->numberBetween(1,9) ,
            'CertificateIssueCityCode' => fake()->numerify('#####'),
            'CertificateIssueCityName' => Faker::city() ,
            'is_active' => fake()->boolean(),
            'organization_phone' => Faker::mobile(),
            'last_inquiry_date' => fake()->iso8601(),


        ];
    }
}
