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

        // Company::factory(20)->create();
        // $this->call([
        //     CompanySeeder::class
        // ]);
        // Driver::factory(20)->create();
        // SenderReceiver::factory(20)->create();
        // Address::factory(60)->create();

        // Draft::factory(20)->create();
        // Field::factory(20)->create();


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
