<?php

namespace Database\Seeders;

use App\Models\BillOfLading;
use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::factory(60)->create();
        // Cargo::factory(20)->create();
        // Cargo::factory(20)->create([
        //     'bill_of_lading_id'=>BillOfLading::inRandomOrder()->first()->id
        // ]);
    }
}
