<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('objects', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned()->default(0);
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('category_id')->unsigned()->default(0);
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->string('name')->default('');
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
        Schema::drop('objects');
    }
}
