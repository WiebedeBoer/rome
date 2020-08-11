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
        //users
        $this->call('UserSeeder');
        //religions
        $this->call('ReligionSeeder');
        //architectures
        $this->call('ArchitectureSeeder');
        //cultures
        $this->call('CultureSeeder');
        //realms
        $this->call('RealmSeeder');
        //regions
        $this->call('RegionSeeder');
        //provinces
        $this->call('ProvinceSeeder');
        //land conections
        $this->call('LandconnectionSeeder');
        //seas
        $this->call('SeaSeeder');
        //sea conections
        $this->call('SeaconnectionSeeder');
		//towns
        $this->call('TownsSeeder');
        //capitals
        $this->call('CapitalSeeder');
    }
}

//foreign keys
class ForeignKeySeeder extends Seeder
{
    public function run()
    {
        //geography
        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('architecture')->references('architecture_id')->on('architectures');
        });	
        Schema::table('provinces', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
            $table->foreign('capital')->references('town_id')->on('towns');
            $table->foreign('governor')->references('person_id')->on('people');
        });	
		Schema::table('towns', function (Blueprint $table) {
			$table->foreign('region')->references('region_id')->on('regions');
            $table->foreign('province')->references('province_id')->on('provinces');
            $table->foreign('realm')->references('realm_id')->on('realms');
            $table->foreign('sea')->references('sea_id')->on('seas');
        });
        //travel organization
        Schema::table('landconnections', function (Blueprint $table) {
            $table->foreign('to')->references('region_id')->on('regions');
            $table->foreign('from')->references('region_id')->on('regions');
        });	
        Schema::table('seaconnections', function (Blueprint $table) {
            $table->foreign('to')->references('sea_id')->on('seas');
            $table->foreign('from')->references('sea_id')->on('seas');
        });
        //people
		Schema::table('people', function (Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users');
        });	
        Schema::table('spouses', function (Blueprint $table) {
            $table->foreign('husband')->references('person_id')->on('people');
            $table->foreign('wife')->references('person_id')->on('people');
        });
        Schema::table('statistics', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
        });	
        Schema::table('skills', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
        });		
        //cultures
        Schema::table('cultures', function (Blueprint $table) {
            $table->foreign('culture_construction')->references('architecture_id')->on('architectures');
            $table->foreign('culture_religion')->references('religion_id')->on('religions');
        });	
        //territorial organization
        Schema::table('realms', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
        });	
		Schema::table('prefectures', function (Blueprint $table) {
            $table->foreign('governor')->references('governor_id')->on('governors');
            $table->foreign('town')->references('town_id')->on('towns');
        });	
        Schema::table('capitals', function (Blueprint $table) {
            $table->foreign('town')->references('town_id')->on('towns');
            $table->foreign('realm')->references('realm_id')->on('realms');
        });	
        //political organization
		Schema::table('rulers', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('realm')->references('realm_id')->on('realms');
        });	
		Schema::table('governors', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('capital')->references('town_id')->on('towns');
        });
		Schema::table('mayors', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('town')->references('town_id')->on('towns');
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
		//chronicles
		Schema::table('chronicles', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
			$table->foreign('town')->references('town_id')->on('towns');
			$table->foreign('realm')->references('realm_id')->on('realms');
			$table->foreign('belligerent')->references('realm_id')->on('realms');
        });	

	}
}

//users
class UserSeeder extends Seeder
{
    public function run()
    {
		DB::table('users')->insert([
            'name' => 'Wiebe',
            'email' => 'wiebe81@gmail.com',
            'password' => '$2y$10$oxROZ./q4K6V.cFw/njPPufOnNVDoMCW0OQKr/OEA816ZGSNZnfSa'
        ]);
    }
}
