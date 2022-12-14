<?php

namespace Database\Seeders;

use App\Models\Shortcut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShortcutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shortcut::factory(20)->create();
    }
}
