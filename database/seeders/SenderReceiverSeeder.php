<?php

namespace Database\Seeders;

use App\Models\SenderReceiver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SenderReceiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SenderReceiver::factory(20)->create();
    }
}
