<?php

namespace Vision;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Vision\HeaderOne;
use Vision\HeaderTwo;


class AddHeders extends Model
{
    //
      use Notifiable;
      protected $table = 'test_header_3';
      protected $primaryKey = 'test_header_3_id';


      protected $fillable = [
          'test_header_1_id', 'test_header_2_id','test_header_3'
      ];


    public function headerOne() {
       return $this->belongsTo('Vision\HeaderOne', 'test_header_1_id');
     }


     public function headerTwo() {
        return $this->belongsTo('Vision\HeaderTwo', 'test_header_2_id');
      }






}
