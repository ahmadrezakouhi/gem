<?php

namespace Database\Seeders;

use App\Models\Company;
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

        Company::factory(20)->create();
        Company::create([
            'panel_code'=>fake()->numerify('123456789'),
            'name'=>'پیش فرض',
            'company_code'=>fake()->numerify('#######'),
            'phone'=>fake()->phoneNumber(),
            'fax'=>fake()->phoneNumber(),
            'mobile'=>Faker::mobile(),
            'manager_name'=>Faker::firstName(),
            'manager_last_name'=>Faker::lastName(),
            'presentor_name'=>Faker::firstName(),
            'presentor_last_name'=>Faker::lastName()


        ]);
    }
}
