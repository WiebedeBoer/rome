<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('ForeignKeySeeder');
		//towns seeds
        $this->call('TownSeeder');
    }
}

//foreign keys
class ForeignKeySeeder extends Seeder
{
    public function run()
    {
        //fk
		Schema::table('towns', function (Blueprint $table) {
			$table->foreign('region')->references('region_id')->on('regions');
            $table->foreign('province')->references('province_id')->on('provinces');
            $table->foreign('ruler')->references('person_id')->on('people');
        });	

		Schema::table('provinces', function (Blueprint $table) {
            $table->foreign('capital')->references('town_id')->on('towns');
            $table->foreign('governor')->references('person_id')->on('people');
        });	

		Schema::table('people', function (Blueprint $table) {
            $table->foreign('owner')->references('id')->on('users');
        });	

		Schema::table('citizens', function (Blueprint $table) {
            $table->foreign('person')->references('person_id')->on('people');
            $table->foreign('realm')->references('realm_id')->on('realms');
        });	

		Schema::table('realms', function (Blueprint $table) {
            $table->foreign('capital')->references('town_id')->on('towns');
        });	

		Schema::table('spouses', function (Blueprint $table) {
            $table->foreign('husband')->references('person_id')->on('people');
            $table->foreign('wife')->references('person_id')->on('people');
        });	

		Schema::table('armies', function (Blueprint $table) {
            $table->foreign('praetor')->references('person_id')->on('people');
            $table->foreign('quaestor')->references('person_id')->on('people');
            $table->foreign('location')->references('town_id')->on('towns');
        });	
	}
}

class TownSeeder extends Seeder
{	
	//towns
    public function run()
    {
		//
		DB::table('towns')->insert([
            'town_name' => 'Roma',
            'horse' => 'horse',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
            'glass' => 'glass',
			'xcoord' => '1187',
			'ycoord' => '1353'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ostia',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1166',
			'ycoord' => '1361'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Lanuvium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1204',
			'ycoord' => '1373'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tarracina',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fish' => 'fish',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1221',
			'ycoord' => '1391'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Casinum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1246',
			'ycoord' => '1377'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Capua',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1268',
			'ycoord' => '1404'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Neapolis',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'oak',
			'xcoord' => '1270',
			'ycoord' => '1422'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Pompei',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'oak',
			'xcoord' => '1280',
			'ycoord' => '1430'
        ]);
        
		//
		DB::table('towns')->insert([
            'town_name' => 'Beneventum',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'boar',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1296',
			'ycoord' => '1401'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Paestum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'oak',
			'xcoord' => '1306',
			'ycoord' => '1452'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Grumentum',
            'wool' => 'sheep',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'oak',
			'xcoord' => '1353',
			'ycoord' => '1455'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Potentia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver',
            'timber' => 'oak',
			'xcoord' => '1348',
			'ycoord' => '1434'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Consentia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver',
            'timber' => 'oak',
			'xcoord' => '1374',
			'ycoord' => '1528'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Crotona',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1413',
			'ycoord' => '1539'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Rhegium',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1339',
			'ycoord' => '1594'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tarentum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1422',
			'ycoord' => '1452'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Brundisium',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1457',
			'ycoord' => '1434'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Barium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1407',
			'ycoord' => '1404'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Canusium',
            'wool' => 'sheep',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1362',
			'ycoord' => '1394'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Larinum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1308',
			'ycoord' => '1359'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Histonium',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1292',
			'ycoord' => '1335'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Marruvium',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'timber' => 'yew',
			'xcoord' => '1228',
			'ycoord' => '1340'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Gravisca',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'flax',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak',
			'xcoord' => '1145',
			'ycoord' => '1340'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Reate',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'yew',
			'xcoord' => '1199',
			'ycoord' => '1328'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Spoletum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'yew',
			'xcoord' => '1200',
			'ycoord' => '1313'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Rusellae',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak',
			'xcoord' => '1110',
			'ycoord' => '1289'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Perusia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'yew',
			'xcoord' => '1177',
			'ycoord' => '1266'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Arretium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1150',
			'ycoord' => '1241'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Saena',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1121',
			'ycoord' => '1250'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Pisa',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1069',
			'ycoord' => '1231'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Florentia',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'cypress',
			'xcoord' => '1115',
			'ycoord' => '1218'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Asculum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1227',
			'ycoord' => '1276'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ancona',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'oak',
			'xcoord' => '1234',
			'ycoord' => '1234'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ariminum',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
			'xcoord' => '1199',
			'ycoord' => '1210'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Luna',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1057',
			'ycoord' => '1203'
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
		//
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
        
    }
}
