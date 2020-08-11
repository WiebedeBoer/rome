<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->bigIncrements('religion_id');
            $table->string('religion_name');
            //gods
			$table->string('state');
			$table->string('agriculture');
            $table->string('war');
            $table->string('love');
			$table->string('commerce');
			$table->string('arts');
            $table->string('sea');
            $table->string('healing');
            $table->string('hunting');
            //gods gender
			$table->string('state_gender');
			$table->string('agriculture_gender');
            $table->string('war_gender');
            $table->string('love_gender');
			$table->string('commerce_gender');
			$table->string('arts_gender');
            $table->string('sea_gender');
            $table->string('healing_gender');
            $table->string('hunting_gender');
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
        Schema::dropIfExists('religions');
    }
}
