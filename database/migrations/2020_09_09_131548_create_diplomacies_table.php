<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomacies', function (Blueprint $table) {
            $table->bigIncrements('diplomacy_id');
            $table->string('relation')->default('neutral'); //neutral, ceasefire, war, peace, ally, vassal, liege
            //fk
            $table->unsignedBigInteger('to');
            $table->unsignedBigInteger('from');
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
        Schema::dropIfExists('diplomacies');
    }
}
