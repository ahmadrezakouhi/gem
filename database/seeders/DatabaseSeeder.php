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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // Driver::factory(20)->create();
        $this->call(CompanySeeder::class);
        SenderReceiver::factory(20)->create();
        Address::factory(60)->create();
        Vehicle::factory(20)->create();
        Draft::factory(20)->create();
        Field::factory(20)->create();


        $this->call([
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

        // $companies = Company::all();
        // Driver::all()->each(function($driver)use ($companies){
        //     $driver->companies()->attach(
        //         $companies->random(rand(1,3))->pluck('panel_code')
        //     );
        // });
    }
}
