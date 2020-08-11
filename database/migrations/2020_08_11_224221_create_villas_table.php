<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->bigIncrements('villa_id');
            $table->string('villa_name')->default('Villa Rustica');
            //livestock
            $table->integer('horses')->default(0); 
            $table->integer('camels')->default(0); 
            $table->integer('donkeys')->default(0); 
            $table->integer('dogs')->default(0); 
            $table->integer('cattle')->default(0); 
            $table->integer('sheep')->default(0); 
            $table->integer('goats')->default(0); 
            $table->integer('pigs')->default(0); 
            $table->integer('chickens')->default(0); 
            $table->integer('ducks')->default(0); 
            $table->integer('rabbit')->default(0); 
            //wild animals
            $table->integer('bear')->default(0); 
            $table->integer('lion')->default(0); 
            //foodstuff
            $table->integer('fruit')->default(0);
            $table->integer('vegetables')->default(0);  
            $table->integer('grain')->default(0); 
            $table->integer('wine')->default(0); 
            $table->integer('olive_oil')->default(0); 
            $table->integer('honey')->default(0); 
            $table->integer('cheese')->default(0); 
            $table->integer('meat')->default(0); 
            $table->integer('fish')->default(0); 
            //raw materials
            $table->integer('timber')->default(0); 
            $table->integer('marble')->default(0);
            $table->integer('ivory')->default(0);
            $table->integer('tin')->default(0); 
            $table->integer('copper')->default(0); 
            $table->integer('iron')->default(0); 
            $table->integer('gold')->default(0); 
            $table->integer('silver')->default(0); 
            $table->integer('salt')->default(0);
            $table->integer('woad')->default(0);
            $table->integer('madder')->default(0);
            $table->integer('indigo')->default(0);
            $table->integer('saffron')->default(0);
            $table->integer('flax')->default(0);
            $table->integer('wool')->default(0);
            //imports
            $table->integer('silk')->default(0);
            $table->integer('spices')->default(0);
            $table->integer('incense')->default(0);
            $table->integer('cedar')->default(0);
            $table->integer('silphium')->default(0);
            //products
            $table->integer('cloth')->default(0);
            $table->integer('leather')->default(0);
            $table->integer('glas')->default(0);
            $table->integer('paper')->default(0);
            $table->integer('pottery')->default(0);
            $table->integer('furniture')->default(0);
            $table->integer('weapons')->default(0);
            $table->integer('armor')->default(0);

            //production
            $table->integer('slaves')->default(0);
            //workshop
            $table->string('taberna')->default('none');
            //water
            $table->integer('impluvium')->default(0);
            //splendour
            $table->integer('vestibulum')->default(1);
            $table->integer('atrium')->default(1);
            $table->integer('tablinum')->default(1);
            $table->integer('triclinium')->default(1);
            $table->integer('cubiculum')->default(1);
            $table->integer('alae')->default(1);
            $table->integer('hortus')->default(1);
            //prestige
            $table->string('house_level')->default('cannaba'); //canaba, tugurium, taberna, casa, domus, sedis, regia, palatium
            //fk
            $table->unsignedBigInteger('town')->nullable();
            $table->unsignedBigInteger('owner')->nullable();
            //time stamps
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
        Schema::dropIfExists('villas');
    }
}
