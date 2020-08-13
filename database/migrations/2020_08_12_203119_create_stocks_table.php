<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('stock_id');
            //stock quantity
            $table->integer('quantity')->default(0);
            //stock production
            $table->integer('production')->default(0);
            //stock use
            $table->integer('usage')->default(0);
            //stock export
            $table->integer('export')->default(0);
            //stock import
            $table->integer('import')->default(0);
            //fk
            $table->unsignedBigInteger('tradegoods');
            $table->unsignedBigInteger('villa');
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
        Schema::dropIfExists('stocks');
    }
}
