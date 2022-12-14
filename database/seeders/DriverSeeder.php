<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ybazli\Faker\Facades\Faker;


class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Driver::factory(20)->create();

    }
}
