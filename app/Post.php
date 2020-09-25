<?php

namespace Vision;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model{

  use Notifiable;
  protected $table = 'video_tutorials';
  protected $primaryKey = 'id';

  protected $fillable = [
   'title','vedio','start_date','expire_date','admin_id','thumbimage','video_cat'

];

    public function video()
    {
        return $this->belongsTo('Vision\VideoCategory', 'id');
    }
}
