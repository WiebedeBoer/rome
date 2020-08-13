<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('building_id');
            //stats
            $table->integer('state')->default(100);
            //fk
            $table->unsignedBigInteger('buildingtype');
            $table->unsignedBigInteger('location');
            $table->unsignedBigInteger('owner')->nullable();
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
        Schema::dropIfExists('buildings');
    }
}
