<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('thread_id');
			$table->string('subforum');
			$table->string('thread_name');
			//fk
			$table->unsignedBigInteger('creator')->nullable(); //user fk
			$table->unsignedBigInteger('region')->nullable(); //region fk
			$table->unsignedBigInteger('realm')->nullable(); //realm fk
			$table->unsignedBigInteger('belligerent')->nullable(); //war realm fk
			//sticky
			$table->integer('sticky')->default(0);
			//description
			$table->text('thread_description')->nullable();
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
        Schema::dropIfExists('threads');
    }
}
