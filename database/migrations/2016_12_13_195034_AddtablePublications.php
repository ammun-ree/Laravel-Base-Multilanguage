<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddtablePublications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('publications', function (Blueprint $table) {
      $table->increments('id');
      $table->string('cover_image_path');
      $table->boolean('online');
      $table->timestamps();
  });

  Schema::create('publication_translations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('publication_id')->unsigned();
      $table->string('locale')->index();

      $table->string('title');
      $table->text('text');

      $table->unique(['publication_id','locale']);
      $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
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
