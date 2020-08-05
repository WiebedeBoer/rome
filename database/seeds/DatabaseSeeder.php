<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //foreign keys
        $this->call('ForeignKeySeeder');
        //regions
        $this->call('RegionSeeder');
        //provinces
        $this->call('ProvinceSeeder');
		//towns
        $this->call('TownsSeeder');
    }
}

//foreign keys
class ForeignKeySeeder extends Seeder
{
    public function run()
    {
        //geography
        Schema::table('provinces', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
            $table->foreign('capital')->references('town_id')->on('towns');
            $table->foreign('governor')->references('person_id')->on('people');
        });	
		Schema::table('towns', function (Blueprint $table) {
			$table->foreign('region')->references('region_id')->on('regions');
            $table->foreign('province')->references('province_id')->on('provinces');
            $table->foreign('ruler')->references('person_id')->on('people');
        });
        //people
		Schema::table('people', function (Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users');
        });	
        Schema::table('spouses', function (Blueprint $table) {
            $table->foreign('husband')->references('person_id')->on('people');
            $table->foreign('wife')->references('person_id')->on('people');
        });	
        //politics
        Schema::table('realms', function (Blueprint $table) {
            $table->foreign('capital')->references('town_id')->on('towns');
        });	
		Schema::table('citizens', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('realm')->references('realm_id')->on('realms');
        });	
        //military
		Schema::table('armies', function (Blueprint $table) {
            $table->foreign('legatus')->references('person_id')->on('people');
            $table->foreign('tribunus')->references('person_id')->on('people');
            $table->foreign('quaestor')->references('person_id')->on('people');
            $table->foreign('location')->references('town_id')->on('towns');
        });	
	}
}
