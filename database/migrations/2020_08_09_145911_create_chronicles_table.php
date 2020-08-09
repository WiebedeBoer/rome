<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChroniclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chronicles', function (Blueprint $table) {
            $table->bigIncrements('chronicle_id');
			$table->string('event_title');
			$table->string('event_category')->default('common');
            $table->integer('year')->default(280);
            $table->string('era')->default('BCE');
			//fk
			$table->unsignedBigInteger('person')->nullable(); //person fk
			$table->unsignedBigInteger('town')->nullable(); //town fk
			$table->unsignedBigInteger('realm')->nullable(); //faction fk
			$table->unsignedBigInteger('belligerent')->nullable(); //war faction fk
			//description
			$table->text('event_description')->nullable();
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
        Schema::dropIfExists('chronicles');
    }
}
