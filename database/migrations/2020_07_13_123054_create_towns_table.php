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
            $table->integer('population')->default(10000); //vicus = 2000, castrum = 5000, oppidum = 10000, municipium = 10000, = 20000, urbis = 50000, = 100000
            //climate
            $table->string('climate')->default('mediterranean'); //mediterranean, oceanic, pontic, continental, alpine, hot steppe, cold steppe, desert oasis, desert wetland
            //animals
            $table->string('pack')->default('none'); //horse, camel
            $table->string('cattle')->default('none'); //cattle
            $table->string('wool')->default('none'); //sheep, goat
            $table->string('pig')->default('none'); //pig
            $table->string('fish')->default('none'); //fish
            $table->string('poultry')->default('none'); //chicken, duck
            $table->string('rabbit')->default('none'); //rabbit
            $table->string('game')->default('none'); //boar, deer, hare, pheasant, elephant
            //crops
            $table->string('fruit')->default('none'); //fruit
            $table->string('grain')->default('none'); //durum, barley, rye, oats, einkorn, spelt, emmer
            $table->string('vine')->default('none'); //grapes
            $table->string('sweetener')->default('none'); //honey
            $table->string('seasoning')->default('none');  //olives         
            //metals
            $table->string('tin')->default('none'); //tin
            $table->string('copper')->default('none'); //copper
            $table->string('iron')->default('none'); //iron
            $table->string('gold')->default('none'); //gold
            $table->string('silver')->default('none'); //silver
            $table->string('salt')->default('none'); //salt
            //resources  
            $table->string('fiber')->default('none'); //flax
            $table->string('pottery')->default('none'); //clay
            $table->string('dye')->default('none'); //woad, madder, indigo
            $table->string('timber')->default('none'); //oak, cypress, yew, beech, juniper, cedar, pine, palm
            $table->string('paper')->default('none'); //papyrus
            $table->string('sculpture')->default('none'); //marble, ivory   
            $table->string('glass')->default('none'); //glass
            $table->string('caravan')->default('none'); //spice, silk, incense
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
