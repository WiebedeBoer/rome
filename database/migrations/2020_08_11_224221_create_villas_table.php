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
            //pack animals
            $table->integer('horses')->default(0); 
            $table->integer('camels')->default(0); 
            $table->integer('donkeys')->default(0); 
            $table->integer('dogs')->default(0); 
            //livestock    
            $table->integer('cattle')->default(0); 
            $table->integer('sheep')->default(0); 
            $table->integer('goats')->default(0); 
            $table->integer('pigs')->default(0); 
            $table->integer('rabbit')->default(0); 
            //poultry
            $table->integer('chickens')->default(0);
            //ducks 
            $table->integer('ducks')->default(0);           
            //wild animals
            $table->integer('bear')->default(0); 
            $table->integer('lion')->default(0); 
            //foodstuff
            $table->integer('wine')->default(0);
            $table->integer('olive_oil')->default(0); 
            $table->integer('honey')->default(0); 
            $table->integer('meat')->default(0); 
            $table->integer('cheese')->default(0); 
            $table->integer('fish')->default(0); 
            $table->integer('vegetables')->default(0);  
            $table->integer('fruit')->default(0); 
            $table->integer('bread')->default(0);               
            //construction materials
            $table->integer('timber')->default(0); 
            $table->integer('marble')->default(0);
            $table->integer('ivory')->default(0);
            $table->integer('bronze')->default(0); 
            $table->integer('hardware')->default(0); 
            //spices
            $table->integer('spices')->default(0);
            //scents
            $table->integer('scents')->default(0);
            //medicine
            $table->integer('medicine')->default(0);
            //finished products
            $table->integer('clothing')->default(0);
            $table->integer('leatherwork')->default(0);
            $table->integer('glasswork')->default(0);            
            $table->integer('pottery')->default(0);
            $table->integer('furniture')->default(0);
            $table->integer('jewelry')->default(0);
            //stored weapons
            $table->integer('bows')->default(0);
            $table->integer('spears')->default(0);
            $table->integer('swords')->default(0);
            //stored armor
            $table->integer('leather_armor')->default(0);
            $table->integer('mail_armor')->default(0);
            $table->integer('plate_armor')->default(0);
            //stored books
            $table->integer('books')->default(0);
            //chattel
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
