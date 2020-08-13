<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armies', function (Blueprint $table) {
            $table->bigIncrements('army_id');
            $table->string('army_name')->default('Legio'); 
            //soldiers
            $table->integer('archers')->default(0);
            $table->integer('skirmishers')->default(0);
            $table->integer('infantry')->default(0);
            $table->integer('cavalry')->default(0);
            //army movement
            $table->integer('movement')->default(365);
            //armor
            $table->integer('armor')->default(0);
            //morale 
            $table->integer('morale')->default(100);
            //pack animals
            $table->integer('pack_horses')->default(0); 
            $table->integer('caravan_camels')->default(0); 
            $table->integer('donkey_train')->default(0); 
            $table->integer('draught_dogs')->default(0); 
            $table->integer('oxen')->default(0); 
            //fk
            $table->unsignedBigInteger('legatus');
            $table->unsignedBigInteger('tribunus')->nullable();
            $table->unsignedBigInteger('quaestor')->nullable();
            $table->unsignedBigInteger('location');
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
        Schema::dropIfExists('armies');
    }
}
