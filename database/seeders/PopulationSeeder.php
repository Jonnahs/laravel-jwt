<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User,Todo};

class PopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Todo::factory(50)->create();
    }
}
