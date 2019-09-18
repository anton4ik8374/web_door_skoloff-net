<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //Все поля разрешено менять
    protected $guarded = [];
    //включает выключает метку времени в таблицах
    public $timestamps = true;
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'name','name_laravel','url','activ'
    ];
}
