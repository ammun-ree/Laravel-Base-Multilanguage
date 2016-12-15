<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddtableOrganizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('organizations', function (Blueprint $table) {
      $table->increments('id');
      $table->string('logo_path');
      $table->string('contact_email');

      $table->boolean('online');
      $table->timestamps();
  });

  Schema::create('organization_translations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('organization_id')->unsigned();
      $table->string('locale')->index();

      $table->string('name');
      $table->text('about_text');

      $table->unique(['organization_id','locale']);
      $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
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
