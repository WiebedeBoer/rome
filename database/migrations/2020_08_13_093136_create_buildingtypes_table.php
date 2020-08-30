<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildingtypes', function (Blueprint $table) {
            $table->bigIncrements('building_id');
            //stats
            $table->string('building_name');
            $table->string('building_category');
            $table->string('religious_category')->default('none');
            $table->string('place_category')->default('construction');
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
        Schema::dropIfExists('buildingtypes');
    }
}
