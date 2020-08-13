<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('trade_id');
            //quantity
            $table->integer('quantity')->default(1);
            //fk
            $table->unsignedBigInteger('realm')->nullable();
            $table->unsignedBigInteger('tradegoods')->nullable();
            $table->unsignedBigInteger('startpoint')->nullable();
            $table->unsignedBigInteger('endpoint')->nullable();
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
        Schema::dropIfExists('trades');
    }
}
