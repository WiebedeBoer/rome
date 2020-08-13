<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleets', function (Blueprint $table) {
            $table->bigIncrements('fleet_id');
            //northern seas ships
            $table->integer('currach')->default(0);
            //mediterranean sea ships
            $table->integer('lembos')->default(0);
            $table->integer('trireme')->default(0);
            $table->integer('quadrireme')->default(0);
            $table->integer('quinquereme')->default(0);
            //red sea ships
            $table->integer('dhow')->default(0);
            //stats
            $table->integer('rowers')->default(0);
            //fk
            $table->unsignedBigInteger('admiral');
            $table->unsignedBigInteger('captain');
            $table->unsignedBigInteger('location');
            $table->unsignedBigInteger('sea');
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
        Schema::dropIfExists('fleets');
    }
}
