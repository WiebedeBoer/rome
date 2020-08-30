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
            $table->string('class_structure')->default('municipal'); //state, temple, municipal, fort, urban, rustic
            $table->string('place')->default('urban'); //urban, treasury, shrine, altar, wall, workshop, fort, camp, strigae, factory, cemetery, residence, apartment, household, estate, farm, rustic
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
