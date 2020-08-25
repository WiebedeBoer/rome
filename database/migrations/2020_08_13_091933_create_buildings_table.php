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
            $table->string('building_name')->nullable();
            //stats
            $table->integer('state')->default(100);
            //tomb type
            $table->string('tomb')->default('none');
            //fk
            $table->unsignedBigInteger('buildingtype');
            $table->unsignedBigInteger('location');
            $table->unsignedBigInteger('owner')->nullable();
            $table->unsignedBigInteger('god')->nullable();
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
