<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ybazli\Faker\Facades\Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Company::factory(20)->hasAttached(Driver::factory()->count(3),
            [
                'personal_code' => fake()->numerify('######'),
                'health_card_number' => fake()->numerify('######') ,
                'health_card_expire' => fake()->iso8601() ,
                'insurance_number' => fake()->numerify('######'),
                'vehicle_smart_number' => fake()->numerify('#####') ,
                'birth_date' => fake()->iso8601() ,
                'city_of_driver_licence' => fake()->numerify('####'),
                'allowed_vehicle_type' => fake()->numberBetween(1,2) ,
                'birth_city_title' => Faker::city() ,
                'status' => fake()->boolean() ,
                'country_code' => fake()->numerify() ,
                'country' => Faker::word() ,
                'phones' => Faker::mobile() ,
                'postal_code' => fake()->numerify('########') ,
                'start_activity' => fake()->iso8601() ,
                'address' => Faker::address(),
                'province' => Faker::state() ,
                'city' => Faker::city(),
                'education' => Faker::word() ,
                'IBAN' => fake()->numerify('########') ,
                'description' => Faker::sentence(),
            ]
        )->create();
    }
}
