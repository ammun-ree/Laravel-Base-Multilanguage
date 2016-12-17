<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events', function (Blueprint $table) {
      $table->increments('id');
      $table->date('starting_date');
      $table->timestamps();
  });

      Schema::create('event_translations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('event_id')->unsigned();
      $table->string('locale')->index();

      $table->string('title');
      $table->text('text');


      $table->unique(['event_id','locale']);
      $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
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
