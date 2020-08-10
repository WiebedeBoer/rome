<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architectures', function (Blueprint $table) {
            $table->bigIncrements('architecture_id');
            $table->string('architecture_name');
            //residential buildings
            $table->string('domus'); //roman, gallic, greco, persian, punic
            $table->string('insula'); //roman, gallic, greco, persian, punic
            $table->string('villa'); //roman, greco, punic
            //commercial buildings
            $table->string('taberna'); //roman, gallic, greco, punic
            $table->string('forum'); //roman, greco, persian, punic
            $table->string('emporium'); //roman, gallic, greco, persian, punic
            //religious buildings
            $table->string('templum'); //roman, greco, persian, punic
            //health buildings
            $table->string('thermae'); //roman, greco
            //education buildings
            $table->string('bibliotheca'); //roman, greco
            //entertainment buildings
            $table->string('theatrum'); //roman
            $table->string('amphitheatrum'); //roman
            $table->string('stadium'); //roman
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
        Schema::dropIfExists('architectures');
    }
}
