<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //Все поля разрешено менять
    protected $guarded = [];
    //включает выключает метку времени в таблицах
    public $timestamps = false;

    public function scopesaveImages($query, $file, $mini)
    {
        return $query->create([
            'file' => $file,
            'mini' => $mini,
        ]);
    }
}
