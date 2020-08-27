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
            $table->string('weather')->default('normal');
            //animals
            $table->string('pack')->default('none'); //105 horse, 114 camel, oxen, donkey, dog
            $table->string('cattle')->default('none'); //162 cattle
            $table->string('wool')->default('none'); //238 sheep, 118 goat
            $table->string('pig')->default('none'); //307 pig
            $table->string('fish')->default('none'); // mackerel, sturgeon, anchovy, tuna, sardine, herring
            $table->string('poultry')->default('none'); //275 chicken, 13 duck
            $table->string('rabbit')->default('none'); //55 rabbit
            $table->string('game')->default('none'); //245 boar, 259 deer, 82 hare, 8 pheasant, 8 elephant, 7 lion, bear, duck
            //crops
            $table->string('fruit')->default('none'); //147 figs, 119 dates, 33 pomegranates, 72 grapes, 25 olives, 175 apples, 31 quinces, plum
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
            $table->string('gems')->default('none'); //2 Sapphire, 11 Emerald, 1 Ruby, 3 amber
            $table->string('salt')->default('none'); //30 salt
            //resources  
            $table->string('fiber')->default('none'); //29 flax, cotton
            $table->string('pottery')->default('none'); //315 clay
            $table->string('dye')->default('none'); //80 woad, 18 madder, 21 indigo, 5 saffron
            $table->string('thatching')->default('straw'); //straw (grains), heather, rushes (cold wetland), reeds (warm wetland), sedges (papyrus), palm branches (oasis)
            $table->string('timber')->default('none'); //168 oak, 70 cypress, 43 yew, 39 beech, 110 juniper, 8 cedar, 33 pine, 118 palm
            $table->string('paper')->default('none'); // 13 papyrus, 4 parchment
            $table->string('sculpture')->default('bricks'); //26 marble, stone, 15 ivory, bricks, adobe   
            $table->string('glass')->default('none'); //22 glass
            $table->string('spice')->default('none'); //28 spice caravan, 5 saffron, 2 silphium, laurel, thyme, marjoram, sage
            $table->string('fabric')->default('none'); //36 silk caravan
            $table->string('scent')->default('none'); //30 incense, incense caravan, 8 cedar, mastic, storax
            $table->string('chattel')->default('none'); //13 slave market
			//statistics
			$table->integer('defenses')->default(25); //1 - 999, ruin 1, oppida 100, castra 300, city wall 600
			$table->integer('justice')->default(900); //1 - 999, wicked 1, unlawful 100, fair 700, virtuous 900
			$table->integer('commerce')->default(50); //1 - 999, ruined 1, poor 100, moderate 300, prosperous 600, rich 800
            $table->integer('agriculture')->default(50); //1 - 999, waste 1, unproductive 100, productive 400, fruitful 600, flourishing 800
			//army stats
			$table->integer('morale')->default(100);
			$table->integer('training')->default(100);
			//soldiers
			$table->integer('guards')->default(1);
            //stored construction resources
            $table->integer('stored_tatch')->default(0);
            $table->integer('stored_timber')->default(0);
            $table->integer('stored_stone')->default(0);
            $table->integer('stored_marble')->default(0);
            $table->integer('stored_bronze')->default(0);
            $table->integer('stored_hardware')->default(0);
            //stored foodstuff
            $table->integer('stored_meat')->default(0); 
            $table->integer('stored_cheese')->default(0); 
            $table->integer('stored_fish')->default(0); 
            $table->integer('stored_vegetables')->default(10000);  
            $table->integer('stored_fruit')->default(10000); 
            $table->integer('stored_bread')->default(10000); 
            //stored animals
            $table->integer('stored_horses')->default(0);
            $table->integer('stored_camels')->default(0);
            $table->integer('stored_dogs')->default(0);
            $table->integer('stored_donkeys')->default(0);
            $table->integer('stored_oxen')->default(0);
            //stored weapons
            $table->integer('stored_bows')->default(0);
            $table->integer('stored_spears')->default(0);
            $table->integer('stored_swords')->default(0);
            //stored armor
            $table->integer('stored_leather_armor')->default(0);
            $table->integer('stored_mail_armor')->default(0);
            $table->integer('stored_plate_armor')->default(0);
            //stored books
            $table->integer('stored_books')->default(0);
            //rebel status
            $table->string('rebel_status')->default('loyal');
			//location
			$table->integer('xcoord');
            $table->integer('ycoord');
            //fk
            $table->unsignedBigInteger('region')->nullable();
            $table->unsignedBigInteger('province')->nullable();
            $table->unsignedBigInteger('realm')->nullable();
            $table->unsignedBigInteger('sea')->nullable();
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
