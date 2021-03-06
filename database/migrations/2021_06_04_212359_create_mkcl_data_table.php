<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMkclDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mkcl_data', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('description');
          $table->string('type');
          $table->string('createdBy');
          $table->string('attachment');
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
        Schema::dropIfExists('mkcl_data');
    }
}
