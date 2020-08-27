<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideuser extends Model
{
    public function level()
    {
        return $this->belongsTo('App\Level', 'level_id');
    }
}
