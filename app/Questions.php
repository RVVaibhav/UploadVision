<?php

namespace Vision;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
  protected $fillable = [


	'subject_group_id',
	'question_type',
	'question',
	'option_1',
	'option_2',
	'option_3',
	'option_4',
	'option_5',
	'correct_option',
	'questions_selection_count',
	'admin_id'

];
}
