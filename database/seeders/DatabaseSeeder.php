<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Company;
use App\Models\Draft;
use App\Models\Driver;
use App\Models\Field;
use App\Models\SenderReceiver;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Ybazli\Faker\Facades\Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            CompanySeeder::class,
            DriverSeeder::class,
            SenderReceiverSeeder::class,
            AddressSeeder::class,
            VehicleSeeder::class,
            DraftSeeder::class,
            FieldSeeder::class,
            UserSeeder::class,
            InsuranceSeeder::class,
            TariffSeeder::class,
            InsuranceCompanySeeder::class,
            DraftBillOfLadingSeeder::class,
            TransportContractSeeder::class,
            BillOfLadingSeeder::class,
            OrderSeeder::class,
            BillItemSeeder::class,
            KartexSeeder::class,
            OwnerSeeder::class,
            ShortcutSeeder::class,

        ]);
        User::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $companies = Company::all();
        Driver::all()->each(function($driver)use ($companies){
            $driver->companies()->attach(
                $companies->random(rand(1,3))->pluck('panel_code'),[
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
            );



        $companies = Company::all();
        $vehicles = Vehicle::all();
        $vehicles->each(function($vehicle)use($companies){
            $vehicle->companies()->attach($companies->random(rand(1,4))->pluck('panel_code'),[
            'type_code'=>fake()->numerify('######'),
            'type_title'=>Faker::word(),
            'inspection_expire'=>fake()->iso8601(),
            'insurance_number'=>fake()->numerify('#########'),
            'insurance_expire'=>fake()->iso8601(),
            'color'=>fake()->colorName(),
            'brand_code'=>fake()->numerify('#########'),
            'brand_title'=>fake()->word(),
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
            ]);

        });
    }
}
