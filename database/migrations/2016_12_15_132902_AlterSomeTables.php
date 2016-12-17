<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSomeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('publications', function (Blueprint $table) {
       $table->integer('category_id')->unsigned()->nullable()->before('created_at');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          });
          Schema::table('category_translations', function (Blueprint $table) {
           $table->string('singular')->before('created_at');
           $table->string('plural')->before('created_at');
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
