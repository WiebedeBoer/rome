<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->bigIncrements('town_id');
			$table->string('town_name');
			//population
            $table->integer('population')->default(3000);
            //climate
            $table->string('climate')->default('mediterranean');
            //animals
            $table->string('horse')->default('none');
            $table->string('cattle')->default('none');
            $table->string('sheep')->default('none');
            $table->string('pig')->default('none');
            $table->string('fish')->default('none');
            $table->string('poultry')->default('none');
            $table->string('elephant')->default('none');
            $table->string('camel')->default('none');
            //crops
            $table->string('fruit')->default('none');
            $table->string('grain')->default('none');
            $table->string('vine')->default('none');
            $table->string('honey')->default('none');
            //metals
            $table->string('tin')->default('none');
            $table->string('copper')->default('none');
            $table->string('iron')->default('none');
            $table->string('gold')->default('none');
            $table->string('silver')->default('none');
            //resources
            $table->string('pottery')->default('none');
            $table->string('dye')->default('none');
            $table->string('timber')->default('none');
            $table->string('paper')->default('none');
            $table->string('scent')->default('none');
            $table->string('sculpture')->default('none');
            $table->string('fabric')->default('none');
            $table->string('glass')->default('none');
			//stats
			$table->integer('defenses')->default(10);
			$table->integer('justice')->default(900);
			$table->integer('commerce')->default(10);
			$table->integer('agriculture')->default(10);
			//army stats
			$table->integer('morale')->default(100);
			$table->integer('training')->default(100);
			//soldiers
			$table->integer('guards')->default(1);
			//stored resources
			$table->integer('stored_food')->default(30000);
			//location
			$table->integer('xcoord');
            $table->integer('ycoord');
            //fk
            $table->unsignedBigInteger('region')->nullable();
            $table->unsignedBigInteger('province')->nullable();
            $table->unsignedBigInteger('ruler')->nullable();
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
        Schema::dropIfExists('towns');
    }
}
