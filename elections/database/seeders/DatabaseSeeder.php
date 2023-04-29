<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\Region;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Region::factory(20)->create();
        Vote::factory(20)->create();
        Participant::factory(20)->create();
    }
}
