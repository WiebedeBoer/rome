<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blessings', function (Blueprint $table) {
            $table->bigIncrements('blessing_id');
            //blessing
            $table->string('blessing');
            //fk
            $table->unsignedBigInteger('god')->nullable();
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
        Schema::dropIfExists('blessings');
    }
}
