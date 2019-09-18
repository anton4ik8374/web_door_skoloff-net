<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            ['name'=>'Главная','name_laravel'=>'home','url'=>'/','activ'=>'1'],
            ['name'=>'Галерея','name_laravel'=>'ourwork','url'=>'/ourwork','activ'=>'1'],
            ['name'=>'Контакты','name_laravel'=>'contacts','url'=>'/contacts','activ'=>'1'],
            ['name'=>'Цены','name_laravel'=>'price','url'=>'/price','activ'=>'1'],
        ]);
    }
}
