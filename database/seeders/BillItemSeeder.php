<?php

namespace Database\Seeders;

use App\Models\BillOfLading;
use App\Models\BillItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillItem::factory(60)->create();
        // Cargo::factory(20)->create();
        // Cargo::factory(20)->create([
        //     'bill_of_lading_id'=>BillOfLading::inRandomOrder()->first()->id
        // ]);
    }
}
