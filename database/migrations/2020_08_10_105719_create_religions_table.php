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
            //major domains gods
			$table->unsignedBigInteger('state');
			$table->unsignedBigInteger('agriculture');
            $table->unsignedBigInteger('war');
            $table->unsignedBigInteger('love');
			$table->unsignedBigInteger('commerce');
			$table->unsignedBigInteger('arts');
            $table->unsignedBigInteger('sea');
            $table->unsignedBigInteger('healing');
            $table->unsignedBigInteger('hunting');
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
