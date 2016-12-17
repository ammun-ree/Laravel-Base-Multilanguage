<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
  });

  Schema::create('category_translations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('category_id')->unsigned();
      $table->string('locale')->index();

      $table->string('name');

      $table->unique(['category_id','locale']);
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
