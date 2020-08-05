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
		//1
		DB::table('towns')->insert([
            'town_name' => 'Roma',
            'pack' => 'horse',
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
		//2
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
		//3
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
		//4
		DB::table('towns')->insert([
            'town_name' => 'Tarracina',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',            
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1221',
			'ycoord' => '1391'
        ]);
		//5
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
		//6
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
		//7
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
		//8
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
		//9
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
		//10
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
		//15
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
		//20
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
            'fiber' => 'flax',
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
		//25
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
		//30
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
		//35
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
            'town_name' => 'Ravenna',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
			'xcoord' => '1168',
			'ycoord' => '1172'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Bononia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1124',
			'ycoord' => '1168'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Mutina',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1099',
			'ycoord' => '1158'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Parma',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1071',
			'ycoord' => '1146'
        ]);
		//40
		DB::table('towns')->insert([
            'town_name' => 'Placentia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1041',
			'ycoord' => '1128'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Dertona',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'yew',
			'xcoord' => '996',
			'ycoord' => '1140'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Genua',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
            'sculpture' => 'marble',
			'xcoord' => '1000',
			'ycoord' => '1176'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Savona',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
			'xcoord' => '974',
			'ycoord' => '1185'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Taurinorum',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'iron' => 'iron',
            'timber' => 'yew',
            'sculpture' => 'marble',
			'xcoord' => '934',
			'ycoord' => '1126'
        ]);
		//45
		DB::table('towns')->insert([
            'town_name' => 'Ticinum',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'copper' => 'copper',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'beech',
			'xcoord' => '1012',
			'ycoord' => '1119'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Mediolanum',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'yew',
            'sculpture' => 'marble',
			'xcoord' => '1015',
			'ycoord' => '1088'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Brixia',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'timber' => 'yew',
            'sculpture' => 'marble',
			'xcoord' => '1054',
			'ycoord' => '1090'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Mantua',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1095',
			'ycoord' => '1122'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Verona',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '1101',
			'ycoord' => '1098'
        ]);
		//50
		DB::table('towns')->insert([
            'town_name' => 'Patavium',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
            'glass' => 'glass',
			'xcoord' => '1150',
			'ycoord' => '1105'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Acelum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew',
			'xcoord' => '1143',
			'ycoord' => '1078'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquileia',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
			'xcoord' => '1217',
			'ycoord' => '1075'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Tergeste',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'iron' => 'iron',
            'gold' => 'gold',
            'timber' => 'beech',
			'xcoord' => '1243',
			'ycoord' => '1086'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Bauzanum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'yew',
			'xcoord' => '1121',
			'ycoord' => '1026'
        ]);
        //corsica
		//55
		DB::table('towns')->insert([
            'town_name' => 'Aleria',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',         
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1025',
			'ycoord' => '1340'
        ]);
        //sardinia
		//56
		DB::table('towns')->insert([
            'town_name' => 'Turris Libyssonis',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper',
            'timber' => 'oak',
			'xcoord' => '982',
			'ycoord' => '1422'
        ]);
		//57
		DB::table('towns')->insert([
            'town_name' => 'Caralis',
            'wool' => 'sheep',           
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'gold' => 'gold',
            'timber' => 'oak',
			'xcoord' => '1008',
			'ycoord' => '1527'
        ]);
        //sicilia
		//58
		DB::table('towns')->insert([
            'town_name' => 'Panormus',
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
            'timber' => 'cypress',
			'xcoord' => '1224',
			'ycoord' => '1599'
        ]);
		//59
		DB::table('towns')->insert([
            'town_name' => 'Lilybaeum',
            'wool' => 'sheep',            
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '1177',
			'ycoord' => '1621'
        ]);
		//60
		DB::table('towns')->insert([
            'town_name' => 'Agrigentum',
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
            'timber' => 'cypress',
			'xcoord' => '1234',
			'ycoord' => '1654'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Gela',
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
            'timber' => 'cypress',
			'xcoord' => '1268',
			'ycoord' => '1667'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Syracusae',
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
            'timber' => 'cypress',
			'xcoord' => '1318',
			'ycoord' => '1663'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Catania',
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
            'timber' => 'cypress',
			'xcoord' => '1313',
			'ycoord' => '1637'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Messana',
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
            'timber' => 'cypress',
			'xcoord' => '1335',
			'ycoord' => '1596'
        ]);
        //achaea
		//65
		DB::table('towns')->insert([
            'town_name' => 'Athenae',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'silver' => 'silver',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'juniper',
            'sculpture' => 'marble',
			'xcoord' => '1749',
			'ycoord' => '1606'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Piraeus',
            'pig' => 'pig',
            'fish' => 'fish',           
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1744',
			'ycoord' => '1612'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Corinthus',
            'pack' => 'horse',
            'wool' => 'sheep',          
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'cypress',
			'xcoord' => '1708',
			'ycoord' => '1611'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Argos',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1699',
			'ycoord' => '1633'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Patrae',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1647',
			'ycoord' => '1592'
        ]);      
		//70
		DB::table('towns')->insert([
            'town_name' => 'Olympia',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1640',
			'ycoord' => '1627'
        ]);     
		//
		DB::table('towns')->insert([
            'town_name' => 'Megalopolis',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1668',
			'ycoord' => '1649'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Messenia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1659',
			'ycoord' => '1658'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Sparta',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1684',
			'ycoord' => '1665'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Gythium',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1690',
			'ycoord' => '1684'
        ]);
		//75
		DB::table('towns')->insert([
            'town_name' => 'Kydonia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper',
            'timber' => 'cypress',
			'xcoord' => '1764',
			'ycoord' => '1764'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Heracleum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper',
            'timber' => 'cypress',
			'xcoord' => '1819',
			'ycoord' => '1775'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Rhodus',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '1976',
			'ycoord' => '1707'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Delos',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'chattel' => 'slave',
			'xcoord' => '1829',
			'ycoord' => '1645'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Thebes',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1728',
			'ycoord' => '1585'
        ]);
		//80
		DB::table('towns')->insert([
            'town_name' => 'Mideia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1707',
			'ycoord' => '1577'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Delphi',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1680',
			'ycoord' => '1569'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Thermum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1645',
			'ycoord' => '1567'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ambracia',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1609',
			'ycoord' => '1526'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Demetrias',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1709',
			'ycoord' => '1519'
        ]);
		//85
		DB::table('towns')->insert([
            'town_name' => 'Larissa',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'timber' => 'juniper', 
			'xcoord' => '1682',
			'ycoord' => '1499'
        ]);
        //epirus
		//86
		DB::table('towns')->insert([
            'town_name' => 'Buthrotum',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '1560',
			'ycoord' => '1493'
        ]);
		//87
		DB::table('towns')->insert([
            'town_name' => 'Epidaurus',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '1532',
			'ycoord' => '1390'
        ]);
        //macedon
        //88
		DB::table('towns')->insert([
            'town_name' => 'Pella',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1682',
			'ycoord' => '1425'
        ]);
		//89
		DB::table('towns')->insert([
            'town_name' => 'Thessalonica',
            'pack' => 'horse',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'iron' => 'iron',
            'gold' => 'gold',
            'timber' => 'oak',
			'xcoord' => '1709',
			'ycoord' => '1437'
        ]);
		//90
		DB::table('towns')->insert([
            'town_name' => 'Amphipolis',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'timber' => 'oak',
			'xcoord' => '1740',
			'ycoord' => '1403'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Maroneia',
            'pack' => 'horse',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'timber' => 'oak',
			'xcoord' => '1854',
			'ycoord' => '1421'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tiveriopolis',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'timber' => 'yew',
			'xcoord' => '1693',
			'ycoord' => '1381'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Stobi',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'timber' => 'yew',
			'xcoord' => '1663',
			'ycoord' => '1380'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Scupi',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'timber' => 'yew',
			'xcoord' => '1634',
			'ycoord' => '1343'
        ]);
        //gallia       
		//95
		DB::table('towns')->insert([
            'town_name' => 'Cemelenum',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
			'xcoord' => '915',
			'ycoord' => '1225'
        ]);          
		//
		DB::table('towns')->insert([
            'town_name' => 'Telo Martius',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',            
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
            'dye' => 'woad',
			'xcoord' => '850',
			'ycoord' => '1266'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Massilia',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',            
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
			'xcoord' => '818',
			'ycoord' => '1254'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Arelate',
            'pack' => 'horse',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',            
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '783',
			'ycoord' => '1227'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Arausio',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '787',
			'ycoord' => '1181'
        ]);
		//100
		DB::table('towns')->insert([
            'town_name' => 'Valentia',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '795',
			'ycoord' => '1134'
        ]);     
		//
		DB::table('towns')->insert([
            'town_name' => 'Ebrodunum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'sweetener' => 'honey',
            'timber' => 'yew', 
			'xcoord' => '885',
			'ycoord' => '1156'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Cularo',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '842',
			'ycoord' => '1117'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Vienne',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '790',
			'ycoord' => '1102'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Lugdunum',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '792',
			'ycoord' => '1079'
        ]);
		//105
		DB::table('towns')->insert([
            'town_name' => 'Narbo Martius',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit', 
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'silver' => 'silver',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '699',
			'ycoord' => '1261'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Carcasum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit', 
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '667',
			'ycoord' => '1257'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Tolosa',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',  
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'silver' => 'silver',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '619',
			'ycoord' => '1232'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Albigensium',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',  
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '657',
			'ycoord' => '1207'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Segodunum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',  
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '679',
			'ycoord' => '1179'
        ]);
		//110
		DB::table('towns')->insert([
            'town_name' => 'Aureliacum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak',  
			'xcoord' => '671',
			'ycoord' => '1140'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Aginnum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',  
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'iron' => 'iron',
            'silver' => 'silver',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '580',
			'ycoord' => '1191'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Burdigala',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'iron' => 'iron',
            'gold' => 'gold',
            'silver' => 'silver',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak',  
			'xcoord' => '517',
			'ycoord' => '1144'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Augustoritum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak',  
			'xcoord' => '613',
			'ycoord' => '1073'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Limonum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '565',
			'ycoord' => '1017'
        ]);
		//115
		DB::table('towns')->insert([
            'town_name' => 'Portus Namnetus',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',  
            'pottery' => 'clay',
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '471',
			'ycoord' => '971'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Condate',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'gold' => 'gold',
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '463',
			'ycoord' => '905'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Vindinium',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '558',
			'ycoord' => '913'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Turonum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '583',
			'ycoord' => '959'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Cenabum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak',  
			'xcoord' => '645',
			'ycoord' => '920'
        ]);
		//120
		DB::table('towns')->insert([
            'town_name' => 'Avaricum',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '669',
			'ycoord' => '982'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Gergovia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'yew', 
			'xcoord' => '708',
			'ycoord' => '1075'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Augustodunum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '772',
			'ycoord' => '1003'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Alesia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '801',
			'ycoord' => '965'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Andematunnum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '859',
			'ycoord' => '940'
        ]);
		//125
		DB::table('towns')->insert([
            'town_name' => 'Vesontio',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron', 
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '829',
			'ycoord' => '1012'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Lutetia',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '667',
			'ycoord' => '848'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Rotomagus',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '603',
			'ycoord' => '802'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Durocorturum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '787',
			'ycoord' => '777'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Samarobriva',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '666',
			'ycoord' => '766'
        ]);
		//130
		DB::table('towns')->insert([
            'town_name' => 'Nemetacum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '693',
			'ycoord' => '723'
        ]);        
		//
		DB::table('towns')->insert([
            'town_name' => 'Bagacum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '730',
			'ycoord' => '726'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Gesioracum',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '628',
			'ycoord' => '699'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tungrorum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '811',
			'ycoord' => '693'
        ]);  
        //germania
		//
		DB::table('towns')->insert([
            'town_name' => 'Argentoratum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '941',
			'ycoord' => '862'
        ]);
		//135
		DB::table('towns')->insert([
            'town_name' => 'Divodurum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '860',
			'ycoord' => '815'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Treverorum',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
            'glass' => 'glass', 
			'xcoord' => '918',
			'ycoord' => '786'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Mogontiacum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '979',
			'ycoord' => '771'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Confluentes',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '955',
			'ycoord' => '727'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Ubiorum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
            'glass' => 'glass', 
			'xcoord' => '902',
			'ycoord' => '682'
        ]);
		//140
		DB::table('towns')->insert([
            'town_name' => 'Coriovallum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '837',
			'ycoord' => '688'
        ]);        
		//
		DB::table('towns')->insert([
            'town_name' => 'Noviomagus',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '840',
			'ycoord' => '613'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Castra Vetera',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '883',
			'ycoord' => '625'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aliso',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '919',
			'ycoord' => '623'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Arbalo',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '989',
			'ycoord' => '618'
        ]);
		//145
		DB::table('towns')->insert([
            'town_name' => 'Mattium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1028',
			'ycoord' => '653'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Portus Batavorum',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '769',
			'ycoord' => '583'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Flevum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '783',
			'ycoord' => '556'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Fabiranum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '994',
			'ycoord' => '507'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Treva',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1047',
			'ycoord' => '468'
        ]);
		//150
		DB::table('towns')->insert([
            'town_name' => 'Castra Stativa',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1013',
			'ycoord' => '825'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Riusiava',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1023',
			'ycoord' => '861'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Vindelicorum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'pottery' => 'clay',
            'dye' => 'woad', 
            'timber' => 'pine', 
			'xcoord' => '1099',
			'ycoord' => '884'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Biriciana',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1107',
			'ycoord' => '802'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Vallatum',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'copper' => 'copper', 
            'silver' => 'silver', 
            'pottery' => 'clay',
            'timber' => 'oak', 
            'glass' => 'glass', 
			'xcoord' => '1127',
			'ycoord' => '851'
        ]);
		//155
		DB::table('towns')->insert([
            'town_name' => 'Alcimoennis',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'copper' => 'copper', 
            'gold' => 'gold',
            'timber' => 'yew',  
			'xcoord' => '1147',
			'ycoord' => '819'
        ]);        
		//
		DB::table('towns')->insert([
            'town_name' => 'Castra Regina',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'pottery' => 'clay',
            'dye' => 'woad', 
            'timber' => 'yew',  
            'sculpture' => 'marble', 
			'xcoord' => '1162',
			'ycoord' => '811'
        ]);
        //helvetia
		//
		DB::table('towns')->insert([
            'town_name' => 'Octodurum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'timber' => 'yew',  
			'xcoord' => '906',
			'ycoord' => '1053'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Brenodurum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew',  
			'xcoord' => '933',
			'ycoord' => '1005'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Rauracorum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew',  
			'xcoord' => '947',
			'ycoord' => '962'
        ]);
		//160
		DB::table('towns')->insert([
            'town_name' => 'Turicum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew',  
			'xcoord' => '993',
			'ycoord' => '967'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Curia Raetorum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'timber' => 'yew',  
			'xcoord' => '1045',
			'ycoord' => '1022'
        ]);
        //noricum
		//
		DB::table('towns')->insert([
            'town_name' => 'Brigantium',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'yew',  
			'xcoord' => '1040',
			'ycoord' => '950'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Iuvavum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'salt' => 'salt',
            'timber' => 'yew', 
			'xcoord' => '1197',
			'ycoord' => '899'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Lauriacum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',  
			'xcoord' => '1258',
			'ycoord' => '900'
        ]);
		//165
		DB::table('towns')->insert([
            'town_name' => 'Carnuntum',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1408',
			'ycoord' => '902'
        ]); 
        
		//
		DB::table('towns')->insert([
            'town_name' => 'Flavia Solva',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1335',
			'ycoord' => '1003'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Virunum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'gold' => 'gold',
            'timber' => 'yew', 
            'glass' => 'glass', 
			'xcoord' => '1273',
			'ycoord' => '1014'
        ]);
        //pannonia
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquincum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
            'pottery' => 'clay',
			'xcoord' => '1517',
			'ycoord' => '951'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Gorsium',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
			'xcoord' => '1480',
			'ycoord' => '976'
        ]);
        //dacia
		//170
		DB::table('towns')->insert([
            'town_name' => 'Partiscum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'juniper', 
			'xcoord' => '1625',
			'ycoord' => '1012'
        ]); 
        
		//
		DB::table('towns')->insert([
            'town_name' => 'Porolissum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1715',
			'ycoord' => '973'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Napoca',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1743',
			'ycoord' => '1004'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Apulum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'iron' => 'iron',
            'gold' => 'gold',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1742',
			'ycoord' => '1045'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Micia',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1710',
			'ycoord' => '1065'
        ]);
		//175
		DB::table('towns')->insert([
            'town_name' => 'Sarmizegetusa',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'pine', 
			'xcoord' => '1706',
			'ycoord' => '1081'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Tibiscum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
            'sculpture' => 'marble', 
			'xcoord' => '1679',
			'ycoord' => '1086'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Argidava',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1671',
			'ycoord' => '1103'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Herculi',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1686',
			'ycoord' => '1138'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Drobeta',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1693',
			'ycoord' => '1159'
        ]);
		//180
		DB::table('towns')->insert([
            'town_name' => 'Castra Traiana',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'timber' => 'pine', 
			'xcoord' => '1781',
			'ycoord' => '1125'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Cumidava',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'gold' => 'gold',
            'timber' => 'pine', 
			'xcoord' => '1846',
			'ycoord' => '1091'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Petrodava',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1883',
			'ycoord' => '991'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Cotnari',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1900',
			'ycoord' => '969'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Noviodunum',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '2003',
			'ycoord' => '1120'
        ]);
        //moesia
		//185
		DB::table('towns')->insert([
            'town_name' => 'Tomis',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1998',
			'ycoord' => '1191'
        ]);         
		//
		DB::table('towns')->insert([
            'town_name' => 'Durostorum',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1930',
			'ycoord' => '1191'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Malva',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold', 
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1781',
			'ycoord' => '1176'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Oescus',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1790',
			'ycoord' => '1211'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Storgasia',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1796',
			'ycoord' => '1243'
        ]);
		//190
		DB::table('towns')->insert([
            'town_name' => 'Odessus',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1962',
			'ycoord' => '1260'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Serdica',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold',
            'timber' => 'pine', 
			'xcoord' => '1735',
			'ycoord' => '1288'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Naissus',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'pine', 
			'xcoord' => '1659',
			'ycoord' => '1250'
        ]);
        //thracia
		//
		DB::table('towns')->insert([
            'town_name' => 'Philippopolis',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold',
			'xcoord' => '1802',
			'ycoord' => '1332'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Hadrianopolis',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1891',
			'ycoord' => '1377'
        ]);
		//195
		DB::table('towns')->insert([
            'town_name' => 'Antheia',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1946',
			'ycoord' => '1314'
        ]);         
		//
		DB::table('towns')->insert([
            'town_name' => 'Perinthus',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'timber' => 'oak', 
            'sculpture' => 'marble', 
			'xcoord' => '1964',
			'ycoord' => '1409'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Byzantium',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '2014',
			'ycoord' => '1409'
        ]);
        //illyricum
		//
		DB::table('towns')->insert([
            'town_name' => 'Sopianae',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
			'xcoord' => '1472',
			'ycoord' => '1055'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Poetovio',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1343',
			'ycoord' => '1023'
        ]);
		//200
		DB::table('towns')->insert([
            'town_name' => 'Celeia',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'iron' => 'iron',
            'timber' => 'beech', 
			'xcoord' => '1313',
			'ycoord' => '1035'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Emona',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1277',
			'ycoord' => '1052'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Iasae',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1375',
			'ycoord' => '1039'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Balissae',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1425',
			'ycoord' => '1073'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Marsonia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1458',
			'ycoord' => '1116'
        ]);
		//205
		DB::table('towns')->insert([
            'town_name' => 'Siscia',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'copper' => 'copper', 
            'iron' => 'iron', 
            'timber' => 'beech', 
			'xcoord' => '1374',
			'ycoord' => '1098'
        ]);   
		//
		DB::table('towns')->insert([
            'town_name' => 'Metulum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1333',
			'ycoord' => '1098'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tarsatica',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech', 
            'sculpture' => 'marble', 
			'xcoord' => '1273',
			'ycoord' => '1109'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Pola',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech', 
			'xcoord' => '1248',
			'ycoord' => '1146'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Iadera',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'timber' => 'cypress', 
			'xcoord' => '1318',
			'ycoord' => '1196'
        ]);
		//210
		DB::table('towns')->insert([
            'town_name' => 'Burnum',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1366',
			'ycoord' => '1202'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Salonia',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1381',
			'ycoord' => '1239'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Narona',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1429',
			'ycoord' => '1272'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Delminium',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'cypress', 
			'xcoord' => '1415',
			'ycoord' => '1225'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Sirmium',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'beech', 
			'xcoord' => '1541',
			'ycoord' => '1135'
        ]);
		//215
		DB::table('towns')->insert([
            'town_name' => 'Singidunum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'beech', 
			'xcoord' => '1582',
			'ycoord' => '1148'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Viminacium',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'beech', 
			'xcoord' => '1623',
			'ycoord' => '1159'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Doclea',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1524',
			'ycoord' => '1311'
        ]);
        //britannia
		//
		DB::table('towns')->insert([
            'town_name' => 'Portus Adurni',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'beech', 
			'xcoord' => '493',
			'ycoord' => '697'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Isca Dumnonum',
            'cattle' => 'cattle',
            'wool' => 'sheep',          
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'tin' => 'tin',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '369',
			'ycoord' => '701'
        ]);
		//220
		DB::table('towns')->insert([
            'town_name' => 'Aquae Sulis',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '427',
			'ycoord' => '649'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Londinium',
            'cattle' => 'cattle',
            'wool' => 'sheep',   
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'iron' => 'iron',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'beech', 
			'xcoord' => '540',
			'ycoord' => '640'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Verulamium',
            'cattle' => 'cattle',
            'wool' => 'sheep',   
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'beech', 
			'xcoord' => '532',
			'ycoord' => '618'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Corinium',
            'cattle' => 'cattle',  
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '450',
			'ycoord' => '624'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Camulodunum',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'wool' => 'sheep',              
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'dye' => 'woad', 
            'timber' => 'beech', 
			'xcoord' => '594',
			'ycoord' => '605'
        ]);
		//225
		DB::table('towns')->insert([
            'town_name' => 'Icenorum',
            'cattle' => 'cattle',
            'wool' => 'sheep',  
            'pig' => 'pig', 
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '612',
			'ycoord' => '544'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Glevum',
            'cattle' => 'cattle',
            'wool' => 'sheep',   
            'fish' => 'fish',           
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'silver' => 'silver',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '435',
			'ycoord' => '609'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ratae Coritanorum',
            'cattle' => 'cattle',
            'wool' => 'sheep',  
            'pig' => 'pig', 
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '490',
			'ycoord' => '544'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Lindum',
            'cattle' => 'cattle',
            'wool' => 'sheep',  
            'pig' => 'pig', 
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'iron' => 'iron',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '519',
			'ycoord' => '495'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Eboracum',
            'cattle' => 'cattle',
            'wool' => 'sheep',  
            'pig' => 'pig', 
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'yew', 
			'xcoord' => '495',
			'ycoord' => '432'
        ]);
		//230
		DB::table('towns')->insert([
            'town_name' => 'Bremetennacum',
            'pig' => 'pig', 
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'iron' => 'iron',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '425',
			'ycoord' => '451'
        ]);    
		//
		DB::table('towns')->insert([
            'town_name' => 'Isca Silurum',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'silver' => 'silver',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '397',
			'ycoord' => '631'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Moridunum',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '330',
			'ycoord' => '611'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Segontium',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'gold' => 'gold',
            'silver' => 'silver',
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '331',
			'ycoord' => '503'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Deva',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'copper' => 'copper',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '401',
			'ycoord' => '499'
        ]);
        //235
        DB::table('towns')->insert([
            'town_name' => 'Viroconium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '422',
			'ycoord' => '539'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Luguvalium',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '400',
			'ycoord' => '352'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Habitancum',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay', 
            'dye' => 'woad', 
			'xcoord' => '438',
			'ycoord' => '327'
        ]);
        //caledonia
		//
		DB::table('towns')->insert([
            'town_name' => 'Trimontium',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
			'xcoord' => '416',
			'ycoord' => '301'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Curia',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '414',
			'ycoord' => '258'
        ]);
        //hibernia  
		//240
		DB::table('towns')->insert([
            'town_name' => 'Eblana',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '232',
			'ycoord' => '485'
        ]);
        //hispania balearica
		//
		DB::table('towns')->insert([
            'town_name' => 'Palma',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo', 
            'timber' => 'juniper', 
			'xcoord' => '683',
			'ycoord' => '1506'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Caleta',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'salt' => 'salt', 
            'dye' => 'indigo', 
            'timber' => 'juniper', 
			'xcoord' => '621',
			'ycoord' => '1548'
        ]);
        //hispania tarraconensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Emporiae',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '706',
			'ycoord' => '1331'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Calidae',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver', 
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '689',
			'ycoord' => '1355'
        ]);
		//245
		DB::table('towns')->insert([
            'town_name' => 'Barcino',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '659',
			'ycoord' => '1385'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Tarraco',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver', 
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '612',
			'ycoord' => '1403'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ilerda',
            'pack' => 'horse',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold', 
            'silver' => 'silver', 
            'timber' => 'juniper', 
			'xcoord' => '579',
			'ycoord' => '1369'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Salduie',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '505',
			'ycoord' => '1365'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Pompaelo',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'silver' => 'silver', 
            'timber' => 'oak', 
            'sculpture' => 'marble', 
			'xcoord' => '465',
			'ycoord' => '1286'
        ]);
		//250
		DB::table('towns')->insert([
            'town_name' => 'Calagurris',
            'pack' => 'horse',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '449',
			'ycoord' => '1322'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Portus Victoriae',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '355',
			'ycoord' => '1243'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Saguntum',
            'pack' => 'horse',
            'pig' => 'pig',
            'fish' => 'fish',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '550',
			'ycoord' => '1475'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Clunia Sulpicia',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'timber' => 'juniper', 
			'xcoord' => '392',
			'ycoord' => '1369'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Pallantia',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold', 
            'silver' => 'silver', 
            'timber' => 'juniper', 
			'xcoord' => '320',
			'ycoord' => '1345'
        ]);
        //hispania carthagiensis
		//255
		DB::table('towns')->insert([
            'town_name' => 'Valentia Edatonorum',
            'pack' => 'horse',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'gold' => 'gold', 
            'silver' => 'silver', 
            'pottery' => 'clay', 
            'timber' => 'juniper', 
            'glass' => 'glass', 
			'xcoord' => '529',
			'ycoord' => '1513'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Lucentum',
            'pack' => 'horse',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'gold' => 'gold', 
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '525',
			'ycoord' => '1584'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Carthago Nova',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver', 
            'timber' => 'juniper', 
			'xcoord' => '497',
			'ycoord' => '1634'
        ]);  
        //
		DB::table('towns')->insert([
            'town_name' => 'Mentesa',
            'wool' => 'goat',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '421',
			'ycoord' => '1542'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Libisosanorum',
            'wool' => 'goat',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '432',
			'ycoord' => '1522'
        ]);
		//260
		DB::table('towns')->insert([
            'town_name' => 'Valeria',
            'pack' => 'horse',
            'wool' => 'goat',            
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'juniper', 
			'xcoord' => '439',
			'ycoord' => '1476'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Segobriga',
            'pack' => 'horse',
            'wool' => 'sheep',            
            'rabbit' => 'rabbit',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper', 
            'timber' => 'juniper', 
            'glass' => 'glass', 
			'xcoord' => '400',
			'ycoord' => '1456'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Ercavica',
            'pack' => 'horse',
            'wool' => 'sheep',            
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '418',
			'ycoord' => '1429'
        ]);
        //hispania baetica
		//
		DB::table('towns')->insert([
            'town_name' => 'Abdera',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'gold' => 'gold', 
            'silver' => 'silver', 
            'timber' => 'juniper', 
			'xcoord' => '390',
			'ycoord' => '1687'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Malaca',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '323',
			'ycoord' => '1689'
        ]);
		//265
		DB::table('towns')->insert([
            'town_name' => 'Gadeira',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '228',
			'ycoord' => '1701'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Tartessus',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '197',
			'ycoord' => '1655'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Hispalis',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '244',
			'ycoord' => '1646'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Carmona',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '269',
			'ycoord' => '1640'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Astigi',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '289',
			'ycoord' => '1636'
        ]);
		//270
		DB::table('towns')->insert([
            'town_name' => 'Corduba',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'gold' => 'gold',
            'silver' => 'silver',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '',
			'ycoord' => ''
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Castulo',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver',
            'timber' => 'juniper', 
			'xcoord' => '356',
			'ycoord' => '1600'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Sisapo',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '338',
			'ycoord' => '1537'
        ]);
        //hispania ulterior
		//
		DB::table('towns')->insert([
            'town_name' => 'Toletum',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '346',
			'ycoord' => '1462'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Segovia',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper',
            'gold' => 'gold',
            'timber' => 'juniper', 
			'xcoord' => '341',
			'ycoord' => '1411'
        ]);
		//275
		DB::table('towns')->insert([
            'town_name' => 'Abula',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper',
            'timber' => 'juniper', 
			'xcoord' => '313',
			'ycoord' => '1432'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Salamanca',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'juniper', 
			'xcoord' => '263',
			'ycoord' => '1412'
        ]);
        //gallaecia
		//
		DB::table('towns')->insert([
            'town_name' => 'Castra Legionis',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'tin' => 'tin',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'yew', 
			'xcoord' => '266',
			'ycoord' => '1300'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Asturica',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'tin' => 'tin',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'yew', 
			'xcoord' => '246',
			'ycoord' => '1313'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Lucus',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'tin' => 'tin',
            'timber' => 'yew',
			'xcoord' => '164',
			'ycoord' => '1274'
        ]);
        //lusitania
		//280
		DB::table('towns')->insert([
            'town_name' => 'Aquae Flaviae',
            'wool' => 'sheep',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'tin' => 'tin',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '169',
			'ycoord' => '1361'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Bracara',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'tin' => 'tin',
            'iron' => 'iron',
            'gold' => 'gold',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '119',
			'ycoord' => '1373'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Portus Cale',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '107',
			'ycoord' => '1399'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aeminium',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '120',
			'ycoord' => '1439'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Eburobrittium',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '100',
			'ycoord' => '1474'
        ]);
		//285
		DB::table('towns')->insert([
            'town_name' => 'Olisipo',
            'pack' => 'horse',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '80',
			'ycoord' => '1561'
        ]);  
        //
		DB::table('towns')->insert([
            'town_name' => 'Caparra',
            'pack' => 'horse',
            'wool' => 'sheep',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'timber' => 'juniper', 
			'xcoord' => '256',
			'ycoord' => '1450'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Emerita',
            'pack' => 'horse',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '226',
			'ycoord' => '1546'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Segida',
            'pack' => 'horse',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '220',
			'ycoord' => '1583'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Ebora',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'yew', 
			'xcoord' => '149',
			'ycoord' => '1575'
        ]);  
		//290
		DB::table('towns')->insert([
            'town_name' => 'Mirobriga',
            'pack' => 'horse',
            'fish' => 'fish',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '101',
			'ycoord' => '1609'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Balsa',
            'pack' => 'horse',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'rabbit' => 'rabbit',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'silver' => 'silver', 
            'timber' => 'oak', 
			'xcoord' => '162',
			'ycoord' => '1663'
        ]); 
        //mauretania tingitana 
		//
		DB::table('towns')->insert([
            'town_name' => 'Septem',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo', 
            'timber' => 'oak', 
			'xcoord' => '277',
			'ycoord' => '1740'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tingis',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo', 
            'timber' => 'oak', 
			'xcoord' => '252',
			'ycoord' => '1747'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Lixus',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo', 
            'timber' => 'oak', 
			'xcoord' => '242',
			'ycoord' => '1766'
        ]);  
		//295
		DB::table('towns')->insert([
            'town_name' => 'Sala',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'salt' => 'salt', 
            'timber' => 'oak', 
			'xcoord' => '211',
			'ycoord' => '1839'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Volubilis',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'gold' => 'gold',
            'salt' => 'salt',
            'timber' => 'oak', 
            'sculpture' => 'ivory', 
			'xcoord' => '259',
			'ycoord' => '1842'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Rusadir',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'juniper', 
			'xcoord' => '399',
			'ycoord' => '1779'
        ]);
        //mauretania caesariensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Pomaria',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '482',
			'ycoord' => '1819'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Murustaga',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'juniper', 
			'xcoord' => '551',
			'ycoord' => '1739'
        ]);  
		//300
		DB::table('towns')->insert([
            'town_name' => 'Cartenna',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '618',
			'ycoord' => '1701'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Tingarta',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '616',
			'ycoord' => '1775'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Fallaba',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '712',
			'ycoord' => '1817'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Caesarea Mauretaniae',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'timber' => 'oak', 
			'xcoord' => '660',
			'ycoord' => '1697'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Icosium',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '704',
			'ycoord' => '1687'
        ]);  
        //mauretania sitifensis
		//305
		DB::table('towns')->insert([
            'town_name' => 'Saldae',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '805',
			'ycoord' => '1687'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Sitifis',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '822',
			'ycoord' => '1723'
        ]);  
        //numidia cirtensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Russicada',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '902',
			'ycoord' => '1678'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Hippo Regius',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '942',
			'ycoord' => '1679'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Calama',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'salt' => 'salt',
            'timber' => 'oak', 
			'xcoord' => '925',
			'ycoord' => '1706'
        ]);  
		//310
		DB::table('towns')->insert([
            'town_name' => 'Thagaste',
            'horse' => 'horse',
            'wool' => 'goat',            
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'iron' => 'iron',
            'timber' => 'oak', 
			'xcoord' => '951',
			'ycoord' => '1718'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Cirta',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'timber' => 'oak', 
			'xcoord' => '883',
			'ycoord' => '1713'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Theveste',
            'horse' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'iron' => 'iron',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '958',
			'ycoord' => '1772'
        ]);
        //numidia militana
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Flavianae',
            'horse' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '910',
			'ycoord' => '1768'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Thamugadi',
            'horse' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '886',
			'ycoord' => '1768'
        ]);  
		//315
		DB::table('towns')->insert([
            'town_name' => 'Lambaesis',
            'horse' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '862',
			'ycoord' => '1764'
        ]);
        //
		DB::table('towns')->insert([
            'town_name' => 'Vescera',
            'horse' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '838',
			'ycoord' => '1807'
        ]); 
        //africa zeugitana 
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
		//320
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
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
		//325
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
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
		//330
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
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
		//335
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
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
		//340
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);
    }
}
