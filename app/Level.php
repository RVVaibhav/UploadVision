<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function algorithms()
    {
        return $this->hasMany('App\Algorithm', 'level_id');
    }

    public function slideuser()
    {
        return $this->hasMany('App\Slideuser', 'level_id');
    }
}
