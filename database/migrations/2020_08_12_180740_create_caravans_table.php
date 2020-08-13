<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaravansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caravans', function (Blueprint $table) {
            $table->bigIncrements('caravan_id');
            //caravan movement
            $table->integer('movement')->default(365); 
            //pack animals
            $table->integer('pack_horses')->default(0); 
            $table->integer('caravan_camels')->default(0); 
            $table->integer('donkey_train')->default(0); 
            $table->integer('draught_dogs')->default(0); 
            $table->integer('oxen')->default(0); 
            //fk
            $table->unsignedBigInteger('tradegoods');
            $table->unsignedBigInteger('person');
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
        Schema::dropIfExists('caravans');
    }
}
