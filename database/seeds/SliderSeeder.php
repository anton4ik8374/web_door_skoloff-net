<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
           ['images'=>'/images/slider/maxresdefault.jpg','header'=>'Работаем на выезд и стационарн','mini_text'=>'У нас можно приобрести автостекло в наличии и под заказ практически на любой автомобиль.','activ'=>'1'],
           ['images'=>'/images/slider/maxresdefault2.jpg','header'=>'Замена лобовых стекол с выездом к вам','mini_text'=>'Осуществляем доставку стекол в самые краткие сроки не более одних суток','activ'=>'1'],
           ['images'=>'/images/slider/maxresdefault3.jpg','header'=>'Профессиональный ремонт и замена автостёкол','mini_text'=>'в Санкт-Петербурге и Ленинградской области, ремонт сколов и трещин любой сложности.','activ'=>'1'],
        ]);
    }
}
