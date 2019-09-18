<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //Все поля разрешено менять
    protected $guarded = [];
    //включает выключает метку времени в таблицах
    public $timestamps = true;
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'name','price','activ'
    ];
}
