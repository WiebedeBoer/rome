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
            $table->string('horse')->default('none'); //horse
            $table->string('cattle')->default('none'); //cattle
            $table->string('wool')->default('none'); //sheep, goat
            $table->string('pig')->default('none'); //pig
            $table->string('fish')->default('none'); //fish
            $table->string('poultry')->default('none'); //chicken
            $table->string('rabbit')->default('none'); //rabbit
            $table->string('elephant')->default('none');
            $table->string('camel')->default('none');
            $table->string('game')->default('none'); //boar, deer, hare
            //crops
            $table->string('fruit')->default('none'); //fruit
            $table->string('grain')->default('none'); //durum, barley, rye, oats, einkorn, spelt
            $table->string('vine')->default('none'); //grapes
            $table->string('sweetener')->default('none'); //honey
            $table->string('seasoning')->default('none');  //olives         
            //metals
            $table->string('tin')->default('none'); //
            $table->string('copper')->default('none'); //copper
            $table->string('iron')->default('none'); //iron
            $table->string('gold')->default('none'); //gold
            $table->string('silver')->default('none'); //silver
            //resources  
            $table->string('fiber')->default('none'); //flax
            $table->string('pottery')->default('none'); //clay
            $table->string('dye')->default('none'); //woad, madder
            $table->string('timber')->default('none'); //oak, cypress, yew, beech, juniper, pine
            $table->string('paper')->default('none'); //
            $table->string('scent')->default('none'); //
            $table->string('sculpture')->default('none'); //marble
            $table->string('fabric')->default('none'); //
            $table->string('glass')->default('none'); //glass
            $table->string('chattel')->default('none'); //slave
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
