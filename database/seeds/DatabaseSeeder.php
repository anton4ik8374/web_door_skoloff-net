<?php

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
        //$this->call(RolesSeeder::class);
        //$this->call(SliderSeeder::class);
        //$this->call(MenuSeeder::class);
        //$this->call(SponsorSeeder::class);
        $this->call(PriceSeeder::class);
    }
}
