<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesPurchesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes_purcheses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('description');
          $table->string('subsription');
          $table->float('tab1');
          $table->float('tab2');
          $table->float('tab3');
          $table->float('tab4');
          $table->float('complete');
          $table->string('admin_i');
          $table->string('createdBy');
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
        Schema::dropIfExists('notes_purcheses');
    }
}
