<?php

namespace Database\Seeders;

use App\Models\DraftBillOfLading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DraftBillOfLadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DraftBillOfLading::factory(20)->create();
    }
}
