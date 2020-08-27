<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slaves', function (Blueprint $table) {
            $table->bigIncrements('slave_id');
            $table->string('slave_name');
            //birth year
            $table->integer('birth')->default(300);
            $table->string('era')->default('BCE');
            $table->integer('generation')->default(1);
			//gender
			$table->string('gender')->default('male');
			//development stats
			$table->integer('jud')->default(0);
			$table->integer('eng')->default(0);
			$table->integer('com')->default(0);
			$table->integer('agr')->default(0);
			//management stats
			$table->integer('tac')->default(0);
			$table->integer('lea')->default(0);
			$table->integer('cha')->default(0);
			//combat stats
			$table->integer('bra')->default(0);
			$table->integer('str')->default(0);
			$table->integer('agi')->default(0);
			//weapon stats
			$table->integer('pol')->default(0);
			$table->integer('swo')->default(0);
			$table->integer('arc')->default(0);
			//logistical stats
			$table->integer('rid')->default(0);
			$table->integer('sai')->default(0);
			$table->integer('rai')->default(0);
            $table->integer('tra')->default(0);	
            //fk
            $table->unsignedBigInteger('owner')->nullable();
            $table->unsignedBigInteger('location')->nullable();
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
        Schema::dropIfExists('slaves');
    }
}
