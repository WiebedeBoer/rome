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
            $table->integer('population')->default(10000); //vicus (39) 2000, castrum (58) 5000, municipium (466) 10000, (29) 20000, (7) 50000, (3) 100000
            //climate
            $table->string('climate')->default('mediterranean'); //223 mediterranean, 74 oceanic, 42 pontic, 81 continental, 25 alpine, 14 hot steppe, 37 cold steppe,  72 desert oasis,  36 desert wetland
            //animals
            $table->string('pack')->default('none'); //105 horse, 114 camel
            $table->string('cattle')->default('none'); //162 cattle
            $table->string('wool')->default('none'); //238 sheep, 118 goat
            $table->string('pig')->default('none'); //307 pig
            $table->string('fish')->default('none'); //174 fish
            $table->string('poultry')->default('none'); //275 chicken, 13 duck
            $table->string('rabbit')->default('none'); //55 rabbit
            $table->string('game')->default('none'); //245 boar, 259 deer, 82 hare, 8 pheasant, 8 elephant
            //crops
            $table->string('fruit')->default('none'); //fruit, figs, 118 dates, 33 pomegranates, grapes, olives
            $table->string('grain')->default('none'); //53 durum, 224 barley, 39 rye, 85 oats, 29 einkorn, 12 spelt, 160 emmer
            $table->string('vine')->default('none'); //389 grapes
            $table->string('sweetener')->default('none'); //86 honey
            $table->string('seasoning')->default('none');  //212 olives         
            //metals
            $table->string('tin')->default('none'); //11 tin
            $table->string('copper')->default('none'); //75 copper
            $table->string('iron')->default('none'); //67 iron
            $table->string('gold')->default('none'); //69 gold
            $table->string('silver')->default('none'); //55 silver
            $table->string('salt')->default('none'); //30 salt
            //resources  
            $table->string('fiber')->default('none'); //29 flax
            $table->string('pottery')->default('none'); //315 clay
            $table->string('dye')->default('none'); //80 woad, 18 madder, 21 indigo, 5 saffron
            $table->string('timber')->default('none'); //168 oak, 70 cypress, 43 yew, 39 beech, 110 juniper, 8 cedar, 33 pine, 118 palm
            $table->string('paper')->default('none'); // 13 papyrus, 4 parchment
            $table->string('sculpture')->default('none'); //26 marble, 15 ivory   
            $table->string('glass')->default('none'); //22 glass
            $table->string('spice')->default('none'); //28 spice, 5 saffron, 2 silphium
            $table->string('fabric')->default('none'); //36 silk
            $table->string('scent')->default('none'); //30 incense, 8 cedar
            $table->string('chattel')->default('none'); //3 slave
			//stats
			$table->integer('defenses')->default(10); //1 - 999, ruin 1, oppida 100, castra 300, city wall 600
			$table->integer('justice')->default(900); //1 - 999
			$table->integer('commerce')->default(10); //1 - 999
			$table->integer('agriculture')->default(10); //1 - 999
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
            $table->unsignedBigInteger('realm')->nullable();
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
