<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gods', function (Blueprint $table) {
            $table->bigIncrements('god_id');
            //god name
            $table->string('god_name');
            //gods gender
			$table->string('god_gender');
            //patron animals
            $table->string('horses')->default('no');
            $table->string('donkeys')->default('no');
            $table->string('camels')->default('no');
            $table->string('dogs')->default('no');
            $table->string('wolves')->default('no');        
            $table->string('cattle')->default('no');
            $table->string('sheep')->default('no');
            $table->string('goats')->default('no');
            $table->string('pigs')->default('no');
            $table->string('boars')->default('no');
            $table->string('chickens')->default('no');
            $table->string('ducks')->default('no');
            $table->string('pheasants')->default('no');
            $table->string('deer')->default('no');
            $table->string('hares')->default('no');
            $table->string('rabbits')->default('no');
            $table->string('lions')->default('no');
            $table->string('bears')->default('no');
            //patron agriculture
            $table->string('grains')->default('no');
            $table->string('wine')->default('no');
            $table->string('fruit')->default('no');
            $table->string('vegetables')->default('no');
            //major domains
			$table->string('state')->default('no');
			$table->string('agriculture')->default('no');
            $table->string('war')->default('no');
            $table->string('love')->default('no');
			$table->string('commerce')->default('no');
			$table->string('arts')->default('no');
            $table->string('sea')->default('no');
            $table->string('healing')->default('no');
            $table->string('hunting')->default('no');
            //minor domains

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
        Schema::dropIfExists('gods');
    }
}
