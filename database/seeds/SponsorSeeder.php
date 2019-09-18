<?php

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponsor::insert([
            ['images'=>'/images/clients/agc.png','name'=>'AGC','activ'=>'1'],
            ['images'=>'/images/clients/benson1.png','name'=>'benson','activ'=>'1'],
            ['images'=>'/images/clients/glass.png','name'=>'glass','activ'=>'1'],
            ['images'=>'/images/clients/KMK1.png','name'=>'KMK','activ'=>'1'],
            ['images'=>'/images/clients/Pilkington1.png','name'=>'Pilkington','activ'=>'1'],
            ['images'=>'/images/clients/Saint-Gobain.png','name'=>'Saint-Gobain','activ'=>'1'],
        ]);
    }
}
