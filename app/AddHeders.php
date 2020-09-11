<?php

namespace Vision;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddHeders extends Model
{
    //
      use Notifiable;
      protected $table = 'test_header_3';
      protected $primaryKey = 'test_header_3_id';


      protected $fillable = [
          'test_header_1_id', 'test_header_2_id','test_header_3'
      ];
}
