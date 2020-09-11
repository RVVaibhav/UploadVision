<?php

namespace Vision;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model{

  use Notifiable;
  protected $table = 'vedioAdd';
  protected $primaryKey = 'id';

  protected $fillable = [

   'title','vedio','visibleDate','endDate','user_id','thumbimage'

];

    public function user()
    {
        return $this->belongsTo('Vision\User', 'user_id');
    }
}
