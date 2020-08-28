<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDetails extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_details', function (Blueprint $table) {
            $table->increments('test_id');
            $table->integer('test_header_3_id');
            $table->integer('test_header_1_id');
            $table->integer('test_header_2_id');
            $table->integer('test_header_4_id');
            $table->string('test_name');
            $table->string('description');
            $table->time('duration');
            $table->date('start_date');
            $table->date('expire_date');
            $table->integer('attempt_limit');
            $table->integer('total_marks');
            $table->integer('num_questions');
            $table->double('correct_score');
            $table->boolean('is_view_correct_answers_allowed');
            $table->double('incorrect_score');
            $table->string('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('test_details');
    }
}
