<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructiontypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructiontypes', function (Blueprint $table) {
            $table->bigIncrements('construction_id');
            //government
            $table->string('construction_name');
            $table->string('category')->default('municipal'); //municipal, urban, rustic, fort, temple
            $table->string('subtype')->default('none'); //none, workshop, rustic, shrine
            //fk
            $table->unsignedBigInteger('building')->nullable();
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
        Schema::dropIfExists('constructiontypes');
    }
}
