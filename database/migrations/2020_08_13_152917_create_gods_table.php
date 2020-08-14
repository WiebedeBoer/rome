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
			$table->string('state')->default('none'); //none, king, creator, judge, light, death, mercy
			$table->string('agriculture')->default('none'); //none, crops, farming, pastures, orchard, cereals, flocks
            $table->string('war')->default('none'); //none, war, sword, axe, club, archery, spear
            $table->string('love')->default('none'); //none, protect, sex, maternal
			$table->string('commerce')->default('none'); //none, prosperity, trade, weaving
			$table->string('arts')->default('none'); //none, wisdom, crafts, gold, dancing, cloak
            $table->string('sea')->default('none'); //none, seas, waters, storm
            $table->string('healing')->default('none'); //none, medicine, pestilence
            $table->string('hunting')->default('none'); //none, hunt, hawk
            //patron animals
            $table->string('horses')->default('none'); //none, herd, chariot, horse
            $table->string('donkeys')->default('none'); //none, herd, donkey
            $table->string('camels')->default('none'); //none, herd
            $table->string('cattle')->default('none'); //none, herd, cattle
            $table->string('sheep')->default('none'); //none, herd, sheep
            $table->string('goats')->default('none'); //none, herd, goat
            $table->string('fish')->default('none'); //none, fish
            $table->string('deer')->default('none'); //none, deer
            $table->string('lions')->default('none'); //none, lion
            $table->string('dogs')->default('none'); //none, dog
            $table->string('wolves')->default('none');        
            $table->string('pigs')->default('none'); //none, pig
            $table->string('boars')->default('none'); //none, boar
            $table->string('chickens')->default('none'); //none, rooster
            $table->string('ducks')->default('none'); 
            $table->string('pheasants')->default('none');
            $table->string('hares')->default('none');
            $table->string('rabbits')->default('none');   
            $table->string('bears')->default('none'); //none, bear
            //patron agriculture
            $table->string('grains')->default('none'); //none, grain, cornucopia
            $table->string('wine')->default('none'); //none, vines
            $table->string('timber')->default('none'); //none, oak, cedar, cypress
            $table->string('fruit')->default('none'); //none, blossom, fruit, apples, pomegranates, olives
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
