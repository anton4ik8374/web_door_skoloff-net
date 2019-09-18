<?php

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::insert([
            ['name'=>'Установка лобового стекла','price'=>'2000-3500','activ'=>1],
            ['name'=>'Установка заднего стекла','price'=>'1800','activ'=>1],
            ['name'=>'Установка кузовной форточки','price'=>'1300','activ'=>1],
            ['name'=>'Установка бокового стекла','price'=>'1000','activ'=>1],
            ['name'=>'Установка стекла в резинку','price'=>'800','activ'=>1],
            ['name'=>'Ремонт скола','price'=>'1000','activ'=>1],
            ['name'=>'Остановка трещины','price'=>'500','activ'=>1],
            ['name'=>'Выезд г.Санкт-Петербурга и Лен.Области','price'=>'1000','activ'=>1],
        ]);
    }
}
