<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gods', function (Blueprint $table) {
            $table->bigIncrements('god_id');
            //god name
            $table->string('god_name');
            //gods gender
            $table->string('god_gender')->default('male');
            //god category
            $table->string('god_category')->default('polytheistic'); //polytheistic, henotheistic, monotheistic
            //god status
            $table->string('god_status')->default('god'); //god, spirit, hero
            //god realm
            $table->string('god_realm')->default('clouds'); //clouds, chthonic, maritime
            //domains
			$table->string('state')->default('none'); //none, king, creator, judge, light, death, mercy, fire
			$table->string('agriculture')->default('none'); //none, crops, farming, pastures, orchard, cereals, flocks
            $table->string('war')->default('none'); //none, war, sword, axe, club, archery, spear, hammer, bounty
            $table->string('love')->default('none'); //none, protect, sex, maternal, household
			$table->string('commerce')->default('none'); //none, prosperity, trade, weaving, metalwork
			$table->string('arts')->default('none'); //none, wisdom, crafts, gold, dancing, cloak, theatre
            $table->string('sea')->default('none'); //none, seas, waters, storm
            $table->string('healing')->default('none'); //none, medicine, pestilence
            $table->string('hunting')->default('none'); //none, hunt, hawk, mountains
            //patron animals
            $table->string('horses')->default('none'); //none, chariot, horse
            $table->string('donkeys')->default('none'); //none, donkey
            $table->string('cattle')->default('none'); //none, cattle
            $table->string('sheep')->default('none'); //none, sheep
            $table->string('goats')->default('none'); //none, goat
            $table->string('fish')->default('none'); //none, fish
            $table->string('deer')->default('none'); //none, deer
            $table->string('lions')->default('none'); //none, lion
            $table->string('dogs')->default('none'); //none, dog      
            $table->string('pigs')->default('none'); //none, pig
            $table->string('boars')->default('none'); //none, boar
            $table->string('chickens')->default('none'); //none, rooster
            $table->string('ducks')->default('none');  //none, duck
            $table->string('pheasants')->default('none'); //none, pheasant
            $table->string('hares')->default('none');
            $table->string('rabbits')->default('none');   
            $table->string('bears')->default('none'); //none, bear
            //patron agriculture
            $table->string('grains')->default('none'); //none, grain, cornucopia
            $table->string('wine')->default('none'); //none, vines
            $table->string('timber')->default('none'); //none, oak, cedar, cypress
            $table->string('fruit')->default('none'); //none, blossom, fruit, apples, pomegranates, olives, figs
            $table->string('vegetables')->default('none'); //none, vegetables
            $table->string('honey')->default('none'); //none, honey
            //bio
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('gods');
    }
}
