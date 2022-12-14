<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


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
        Company::factory()->create(
            [
                'panel_code' => '123456789'
            ]
        );
    }
}
