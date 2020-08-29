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
            //subtype
            $table->string('subtype')->default('none'); //tumulus, tomb, pyramid, lighthouse, grove, hanging garden
            //category
            $table->string('category')->default('none'); //none, health, education, government, forum, wall, importer, industrial, grove, oracle, tomb
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
