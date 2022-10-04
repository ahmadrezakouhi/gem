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

        Company::factory(20)->create();
        $this->call([
            CompanySeeder::class
        ]);
        Driver::factory(20)->create();
        SenderReceiver::factory(20)->create();
        Address::factory(20)->create();
        Vehicle::factory(20)->create();
        Draft::factory(20)->create();
        Field::factory(20)->create();


        $this->call([
            InsuranceSeeder::class,
            TariffSeeder::class,
            InsuranceCompanySeeder::class,
            DraftBillOfLadingSeeder::class,
            TransportContractSeeder::class,
            BillOfLadingSeeder::class,
            CargoSeeder::class,
            OrderSeeder::class,
        ]);
        User::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
