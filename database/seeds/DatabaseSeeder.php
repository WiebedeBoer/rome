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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
            'horse' => 'horse',
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
		//175
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
		//180
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
		//185
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
		//190
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
		//195
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
		//200
		DB::table('towns')->insert([
			'town_name' => '',
			'xcoord' => '',
			'ycoord' => ''
        ]);  


    }
}
