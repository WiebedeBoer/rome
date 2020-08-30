<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructions', function (Blueprint $table) {
            $table->bigIncrements('construction_id');
            //government
            $table->string('construction_name');
            $table->string('category')->default('municipal'); //state, temple, municipal, fort, urban, rustic
            $table->string('subtype')->default('none'); //urban, treasury, shrine, altar, wall, workshop, fort, camp, strigae, factory, cemetery, residence, apartment, household, estate, farm, rustic
            //requirements
            $table->string('bricks')->default(0);
            $table->string('stones')->default(0);
            $table->string('marble')->default(0);
            $table->string('adobe')->default(0);
            $table->string('thatching')->default(0);
            $table->string('tiles')->default(0);
            $table->string('timber')->default(0);
            //completion
            $table->string('construction_bricks')->default(0);
            $table->string('construction_stones')->default(0);
            $table->string('construction_marble')->default(0);
            $table->string('construction_adobe')->default(0);
            $table->string('construction_thatching')->default(0);
            $table->string('construction_tiles')->default(0);
            $table->string('construction_timber')->default(0);
            //fk
            $table->unsignedBigInteger('villa')->nullable();
            $table->unsignedBigInteger('city')->nullable();
            $table->unsignedBigInteger('construction')->nullable();
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
        Schema::dropIfExists('constructions');
    }
}
