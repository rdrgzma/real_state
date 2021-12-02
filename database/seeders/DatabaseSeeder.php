<?php

namespace Database\Seeders;

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
        \App\Models\Office::factory(1)->create();
        \App\Models\Realtor::factory(1)->create();
        \App\Models\KeysWord::factory(1)->create();


    }
}
