<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('person_id');
            $table->string('person_name');
            //birth year
            $table->integer('birth')->default(300);
            $table->string('era')->default('BCE');
			//gender
			$table->string('gender')->default('male');
			//turns
            $table->integer('pt')->default(1);
            $table->integer('kt')->default(1);
			//money
            $table->integer('money')->default(0);
            //biography
			$table->text('bio')->nullable();
			//fk
            $table->unsignedBigInteger('owner')->nullable();
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
        Schema::dropIfExists('people');
    }
}
