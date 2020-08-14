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
        //gods
        $this->call('GodSeeder');
        //mythology
        $this->call('MythologySeeder');
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
        //roads
        $this->call('RoadSeeder');
        //milestones
        $this->call('MilestoneSeeder');
        //goods types
        $this->call('GoodtypeSeeder');
        //equipment types
        $this->call('EquipmenttypeSeeder');
        //building types
        $this->call('BuildingtypeSeeder');  
        //buildings
        $this->call('BuildingSeeder');       
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
        Schema::table('buildings', function (Blueprint $table) {
            $table->foreign('buildingtype')->references('building_id')->on('buildingtypes');
            $table->foreign('location')->references('town_id')->on('towns');
            $table->foreign('owner')->references('person_id')->on('people');
            $table->foreign('god')->references('god_id')->on('gods');
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
        Schema::table('milestones', function (Blueprint $table) {
            $table->foreign('road')->references('road_id')->on('roads');
            $table->foreign('town')->references('town_id')->on('towns');
        });	
        //agricultural organization
		Schema::table('villas', function (Blueprint $table) {
            $table->foreign('owner')->references('person_id')->on('people');
            $table->foreign('town')->references('town_id')->on('towns');
        });	
        //trade
		Schema::table('trades', function (Blueprint $table) {
            $table->foreign('realm')->references('realm_id')->on('realms');
            $table->foreign('tradegoods')->references('good_id')->on('goodtypes');
            $table->foreign('startpoint')->references('town_id')->on('towns');
            $table->foreign('endpoint')->references('town_id')->on('towns');
        });	
		Schema::table('caravans', function (Blueprint $table) {
            $table->foreign('tradegoods')->references('good_id')->on('goodtypes');
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('location')->references('town_id')->on('towns');
        });	
		Schema::table('cargos', function (Blueprint $table) {
            $table->foreign('tradegoods')->references('good_id')->on('goodtypes');
            $table->foreign('caravan')->references('caravan_id')->on('caravans');
        });	
		Schema::table('sales', function (Blueprint $table) {
            $table->foreign('tradegoods')->references('good_id')->on('goodtypes');
            $table->foreign('villa')->references('villa_id')->on('villas');
        });
		Schema::table('stocks', function (Blueprint $table) {
            $table->foreign('tradegoods')->references('good_id')->on('goodtypes');
            $table->foreign('villa')->references('villa_id')->on('villas');
        });		
        //people
		Schema::table('people', function (Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users');
            $table->foreign('location')->references('town_id')->on('towns');
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
        Schema::table('mythologies', function (Blueprint $table) {
            $table->foreign('god')->references('god_id')->on('gods');
            $table->foreign('religion')->references('religion_id')->on('religions');
        });	
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
        Schema::table('equipment', function (Blueprint $table) {
            $table->foreign('equipmenttype')->references('equipment_id')->on('equipmenttypes');
            $table->foreign('person')->references('person_id')->on('people');         
        });	
		Schema::table('fleets', function (Blueprint $table) {
            $table->foreign('admiral')->references('person_id')->on('people');
            $table->foreign('captain')->references('person_id')->on('people');
            $table->foreign('sea')->references('sea_id')->on('seas');
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
