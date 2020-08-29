<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('governments', function (Blueprint $table) {
            $table->bigIncrements('government_id');
            //government
            $table->string('government_name');
            $table->string('head_of_state');
            $table->string('assembly');
            $table->integer('rulers');
            //forms
            $table->string('power');
            $table->string('territory');
            $table->string('form');
            //timestamps
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
        Schema::dropIfExists('governments');
    }
}
