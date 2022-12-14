<?php

namespace Database\Seeders;

use App\Models\BillOfLading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillOfLadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillOfLading::factory(20)->create();
    }
}
