<?php

use Illuminate\Database\Seeder;

class TownsSeeder extends Seeder
{

    public function run()
    {
        //italia
        //latium
        //1
		DB::table('towns')->insert([
            'town_name' => 'Roma',
            'population' => '50000',
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
            'ycoord' => '1353',
			'region' => '1',
            'province' => '1'        
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
            'ycoord' => '1361',
			'region' => '1',
            'province' => '1' 
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
            'ycoord' => '1373',
            'region' => '1',
            'province' => '1'   
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
            'ycoord' => '1391',
            'region' => '1',
            'province' => '1'   
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
            'ycoord' => '1377',
            'region' => '1',
            'province' => '1'   
        ]);
        //campania
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
            'ycoord' => '1404',
            'region' => '1',
            'province' => '2'   
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
            'ycoord' => '1422',
            'region' => '1',
            'province' => '2' 
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
            'ycoord' => '1430',
            'region' => '1',
            'province' => '2' 
        ]);
        //lucania     
		//9
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
            'ycoord' => '1452',
            'region' => '1',
            'province' => '3' 
        ]);
		//10
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
            'ycoord' => '1455',
            'region' => '1',
            'province' => '3' 
        ]);
		//11
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
            'ycoord' => '1434',
            'region' => '1',
            'province' => '3'
        ]);
        //bruttium
		//12
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
            'ycoord' => '1528',
            'region' => '1',
            'province' => '4'
        ]);       
		//13
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
            'ycoord' => '1539',
            'region' => '1',
            'province' => '4'
        ]);
		//14
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
            'ycoord' => '1594',
            'region' => '1',
            'province' => '4'
        ]);
        //calabria
		//15
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
            'ycoord' => '1452',
            'region' => '1',
            'province' => '5'
        ]);
		//16
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
            'ycoord' => '1434',
            'region' => '1',
            'province' => '5'
        ]);
        //apulia
		//17
		DB::table('towns')->insert([
            'town_name' => 'Barium',
            'climate' => 'pontic',
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
            'ycoord' => '1404',
            'region' => '1',
            'province' => '6'
        ]);
		//18
		DB::table('towns')->insert([
            'town_name' => 'Canusium',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1362',
            'ycoord' => '1394',
            'region' => '1',
            'province' => '6'
        ]);
        //samnium
		//19
		DB::table('towns')->insert([
            'town_name' => 'Larinum',
            'climate' => 'pontic',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'oak',
			'xcoord' => '1308',
            'ycoord' => '1359',
            'region' => '1',
            'province' => '7'
        ]);
		//20
		DB::table('towns')->insert([
            'town_name' => 'Histonium',
            'climate' => 'pontic',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
			'xcoord' => '1292',
            'ycoord' => '1335',
            'region' => '1',
            'province' => '7'
        ]);
		//21
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
            'ycoord' => '1401',
            'region' => '1',
            'province' => '7' 
        ]); 
        //umbria
		//22
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
            'ycoord' => '1340',
            'region' => '1',
            'province' => '8'
        ]);
		//23
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
            'ycoord' => '1328',
            'region' => '1',
            'province' => '8'
        ]);
		//24
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
            'ycoord' => '1313',
            'region' => '1',
            'province' => '8'
        ]);
		//25
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
            'ycoord' => '1266',
            'region' => '1',
            'province' => '8'
        ]);
        //picenum
		//23
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
            'ycoord' => '1234',
            'region' => '1',
            'province' => '9'
        ]);
		//24
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
            'ycoord' => '1276',
            'region' => '1',
            'province' => '9'
        ]);
        //etruria
		//25
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
            'ycoord' => '1340',
            'region' => '1',
            'province' => '10'
        ]);
		//26
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
            'ycoord' => '1289',
            'region' => '1',
            'province' => '10'
        ]);
		//27
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
            'ycoord' => '1241',
            'region' => '1',
            'province' => '10'
        ]);
		//28
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
            'ycoord' => '1250',
            'region' => '1',
            'province' => '10'
        ]);
		//29
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
            'ycoord' => '1231',
            'region' => '1',
            'province' => '10'
        ]);
		//30
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
            'ycoord' => '1218',
            'region' => '1',
            'province' => '10'
        ]);
		//31
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
            'ycoord' => '1203',
            'region' => '1',
            'province' => '10'
        ]);
        //sicilia
        //sicilia
		//32
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
            'ycoord' => '1599',
            'region' => '2',
            'province' => '11'
        ]);
		//33
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
            'ycoord' => '1621',
            'region' => '2',
            'province' => '11'
        ]);
		//34
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
            'ycoord' => '1654',
            'region' => '2',
            'province' => '11'
        ]);
		//35
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
            'ycoord' => '1667',
            'region' => '2',
            'province' => '11'
        ]);
		//36
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
            'ycoord' => '1663',
            'region' => '2',
            'province' => '11'
        ]);
		//37
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
            'ycoord' => '1637',
            'region' => '2',
            'province' => '11'
        ]);       
		//38
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
            'ycoord' => '1596',
            'region' => '2',
            'province' => '11'
        ]);
        //sardinia
        //sardinia
		//39
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
            'ycoord' => '1422',
            'region' => '3',
            'province' => '12'
        ]);
		//40
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
            'ycoord' => '1527',
            'region' => '3',
            'province' => '12'
        ]);
        //corsica
        //corsica
		//41
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
            'ycoord' => '1340',
            'region' => '4',
            'province' => '13'
        ]);
        //annonaria
        //aemilia
		//42
		DB::table('towns')->insert([
            'town_name' => 'Ariminum',
            'climate' => 'pontic',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
			'xcoord' => '1199',
            'ycoord' => '1210',
            'region' => '5',
            'province' => '14'
        ]);
		//43
		DB::table('towns')->insert([
            'town_name' => 'Ravenna',
            'climate' => 'pontic',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech',
			'xcoord' => '1168',
            'ycoord' => '1172',
            'region' => '5',
            'province' => '14'
        ]);
		//44
		DB::table('towns')->insert([
            'town_name' => 'Bononia',
            'climate' => 'pontic',
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
            'ycoord' => '1168',
            'region' => '5',
            'province' => '14'
        ]);
		//45
		DB::table('towns')->insert([
            'town_name' => 'Mutina',
            'climate' => 'pontic',
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
            'ycoord' => '1158',
            'region' => '5',
            'province' => '14'
        ]);
        //liguria
		//46
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
            'ycoord' => '1176',
            'region' => '5',
            'province' => '15'
        ]);
		//47
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
            'ycoord' => '1185',
            'region' => '5',
            'province' => '15'
        ]);
        //gallia cisalpina
		//48
		DB::table('towns')->insert([
            'town_name' => 'Parma',
            'climate' => 'pontic',
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
            'ycoord' => '1146',
            'region' => '5',
            'province' => '16'
        ]);
		//49
		DB::table('towns')->insert([
            'town_name' => 'Placentia',
            'climate' => 'pontic',
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
            'ycoord' => '1128',
            'region' => '5',
            'province' => '16'
        ]);
		//50
		DB::table('towns')->insert([
            'town_name' => 'Dertona',
            'climate' => 'pontic',
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
            'ycoord' => '1140',
            'region' => '5',
            'province' => '16'
        ]);
		//51
		DB::table('towns')->insert([
            'town_name' => 'Taurinorum',
            'climate' => 'pontic',
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
            'ycoord' => '1126',
            'region' => '5',
            'province' => '16'
        ]);
		//52
		DB::table('towns')->insert([
            'town_name' => 'Ticinum',
            'climate' => 'pontic',
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
            'ycoord' => '1119',
            'region' => '5',
            'province' => '16'
        ]);
		//53
		DB::table('towns')->insert([
            'town_name' => 'Mediolanum',
            'climate' => 'pontic',
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
            'ycoord' => '1088',
            'region' => '5',
            'province' => '16'
        ]);
		//54
		DB::table('towns')->insert([
            'town_name' => 'Vercellae',
            'climate' => 'pontic',
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
			'xcoord' => '974',
            'ycoord' => '1108',
            'region' => '5',
            'province' => '16'
        ]);
		//55
		DB::table('towns')->insert([
            'town_name' => 'Brixia',
            'climate' => 'pontic',
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
            'ycoord' => '1090',
            'region' => '5',
            'province' => '16'
        ]);
        //Raetia Prima
		//56
		DB::table('towns')->insert([
            'town_name' => 'Curia Raetorum',
            'climate' => 'alpine',
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
            'ycoord' => '1022',
            'region' => '5',
            'province' => '17'
        ]);
		//57
		DB::table('towns')->insert([
            'town_name' => 'Brigantium',
            'climate' => 'alpine',
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
            'ycoord' => '950',
            'region' => '5',
            'province' => '17'
        ]);
		//58
		DB::table('towns')->insert([
            'town_name' => 'Turicum',
            'climate' => 'alpine',
            'population' => '2000',
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
            'ycoord' => '967',
            'region' => '5',
            'province' => '17'
        ]);
		//59
		DB::table('towns')->insert([
            'town_name' => 'Bauzanum',
            'climate' => 'alpine',
            'population' => '5000',
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
            'ycoord' => '1026',
            'region' => '5',
            'province' => '17'
        ]); 
		//60
		DB::table('towns')->insert([
            'town_name' => 'Tridentum',
            'climate' => 'alpine',
            'population' => '5000',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'yew',
			'xcoord' => '1111',
            'ycoord' => '1054',
            'region' => '5',
            'province' => '17'
        ]);
		//61
		DB::table('towns')->insert([
            'town_name' => 'Veldidena',
            'climate' => 'alpine',
            'population' => '5000',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'yew',
            'glass' => 'glass',
			'xcoord' => '1126',
            'ycoord' => '967',
            'region' => '5',
            'province' => '17'
        ]); 
        //Raetia Secunda
		//62
		DB::table('towns')->insert([
            'town_name' => 'Vindelicorum',
            'climate' => 'continental',
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
            'ycoord' => '884',
            'region' => '5',
            'province' => '18'
        ]);
		//63
		DB::table('towns')->insert([
            'town_name' => 'Vallatum',
            'climate' => 'continental',
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
            'ycoord' => '851',
            'region' => '5',
            'province' => '18'
        ]);
		//64
		DB::table('towns')->insert([
            'town_name' => 'Alcimoennis',
            'climate' => 'continental',
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
            'ycoord' => '819',
            'region' => '5',
            'province' => '18'
        ]);        
		//65
		DB::table('towns')->insert([
            'town_name' => 'Castra Regina',
            'climate' => 'continental',
            'population' => '5000',
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
            'ycoord' => '811',
            'region' => '5',
            'province' => '18'
        ]);
        //noricum
		//66
		DB::table('towns')->insert([
            'town_name' => 'Iuvavum',
            'climate' => 'alpine',
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
            'ycoord' => '899',
            'region' => '5',
            'province' => '19'
        ]);  
		//67
		DB::table('towns')->insert([
            'town_name' => 'Lauriacum',
            'climate' => 'alpine',
            'population' => '5000',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',  
			'xcoord' => '1258',
            'ycoord' => '900',
            'region' => '5',
            'province' => '19'
        ]);
		//68
		DB::table('towns')->insert([
            'town_name' => 'Flavia Solva',
            'climate' => 'alpine',
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
            'ycoord' => '1003',
            'region' => '5',
            'province' => '19'
        ]);
		//69
		DB::table('towns')->insert([
            'town_name' => 'Virunum',
            'climate' => 'alpine',
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
            'ycoord' => '1014',
            'region' => '5',
            'province' => '19'
        ]);
		//70
		DB::table('towns')->insert([
            'town_name' => 'Celeia',
            'climate' => 'alpine',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'iron' => 'iron',
            'timber' => 'beech', 
			'xcoord' => '1313',
            'ycoord' => '1035',
            'region' => '5',
            'province' => '19'
        ]);  
		//71
		DB::table('towns')->insert([
            'town_name' => 'Emona',
            'climate' => 'alpine',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'iron' => 'iron',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1277',
            'ycoord' => '1052',
            'region' => '5',
            'province' => '19'
        ]);
		//72
		DB::table('towns')->insert([
            'town_name' => 'Aelium Cetium',
            'climate' => 'alpine',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',  
			'xcoord' => '1341',
            'ycoord' => '897',
            'region' => '5',
            'province' => '19'
        ]);
        //venetia
		//73
		DB::table('towns')->insert([
            'town_name' => 'Mantua',
            'climate' => 'pontic',
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
            'ycoord' => '1122',
            'region' => '5',
            'province' => '20'
        ]);
		//74
		DB::table('towns')->insert([
            'town_name' => 'Verona',
            'climate' => 'pontic',
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
            'ycoord' => '1098',
            'region' => '5',
            'province' => '20'
        ]);
		//75
		DB::table('towns')->insert([
            'town_name' => 'Patavium',
            'climate' => 'pontic',
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
            'ycoord' => '1105',
            'region' => '5',
            'province' => '20'
        ]);
		//76
		DB::table('towns')->insert([
            'town_name' => 'Acelum',
            'climate' => 'pontic',
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
            'ycoord' => '1078',
            'region' => '5',
            'province' => '20'
        ]);
		//77
		DB::table('towns')->insert([
            'town_name' => 'Aquileia',
            'climate' => 'pontic',
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
            'ycoord' => '1075',
            'region' => '5',
            'province' => '20'
        ]);
        //Alpes Cottiae
		//78
		DB::table('towns')->insert([
            'town_name' => 'Ebrodunum',
            'climate' => 'alpine',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'sweetener' => 'honey',
            'timber' => 'yew', 
			'xcoord' => '885',
            'ycoord' => '1156',
            'region' => '5',
            'province' => '21'
        ]);
        //Alpes Maritimae
		//79
		DB::table('towns')->insert([
            'town_name' => 'Cemelenum',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak',
			'xcoord' => '915',
            'ycoord' => '1225',
            'region' => '5',
            'province' => '22'
        ]);
        //Alpes Poeniae
		//80
		DB::table('towns')->insert([
            'town_name' => 'Octodurum',
            'climate' => 'alpine',
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
            'ycoord' => '1053',
            'region' => '5',
            'province' => '23'
        ]);
        //gallia
        //helvetia
		//81
		DB::table('towns')->insert([
            'town_name' => 'Brenodurum',
            'population' => '2000',
            'climate' => 'alpine',
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
            'ycoord' => '1005',
            'region' => '6',
            'province' => '24'
        ]);  
		//82
		DB::table('towns')->insert([
            'town_name' => 'Rauracorum',
            'climate' => 'alpine',
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
            'ycoord' => '962',
            'region' => '6',
            'province' => '24'
        ]);
		//83
		DB::table('towns')->insert([
            'town_name' => 'Vesontio',
            'climate' => 'alpine',
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
            'ycoord' => '1012',
            'region' => '6',
            'province' => '24'
        ]);  
		//84
		DB::table('towns')->insert([
            'town_name' => 'Vindonissa',
            'climate' => 'alpine',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'copper' => 'copper', 
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '976',
            'ycoord' => '960',
            'region' => '6',
            'province' => '24'
        ]); 
		//85
		DB::table('towns')->insert([
            'town_name' => 'Aventicum',
            'climate' => 'alpine',
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
			'xcoord' => '908',
            'ycoord' => '1003',
            'region' => '6',
            'province' => '24'
        ]); 
        //Gallia Viennensis
		//86
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
            'ycoord' => '1266',
            'region' => '6',
            'province' => '25'
        ]);
		//87
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
            'ycoord' => '1254',
            'region' => '6',
            'province' => '25'
        ]);
		//88
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
            'ycoord' => '1227',
            'region' => '6',
            'province' => '25'
        ]);  
		//89
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
            'ycoord' => '1181',
            'region' => '6',
            'province' => '25'
        ]);
		//90
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
            'ycoord' => '1134',
            'region' => '6',
            'province' => '25'
        ]);     
		//91
		DB::table('towns')->insert([
            'town_name' => 'Cularo',
            'population' => '2000',
            'climate' => 'alpine',
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
            'ycoord' => '1117',
            'region' => '6',
            'province' => '25'
        ]);
		//92
		DB::table('towns')->insert([
            'town_name' => 'Vienne',
            'climate' => 'alpine',
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
            'ycoord' => '1102',
            'region' => '6',
            'province' => '25'
        ]); 
		//93
		DB::table('towns')->insert([
            'town_name' => 'Aquae Gratianae',
            'population' => '2000',
            'climate' => 'alpine',
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
			'xcoord' => '847',
            'ycoord' => '1090',
            'region' => '6',
            'province' => '25'
        ]); 
		//94
		DB::table('towns')->insert([
            'town_name' => 'Geneva',
            'population' => '5000',
            'climate' => 'alpine',
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
			'xcoord' => '859',
            'ycoord' => '1047',
            'region' => '6',
            'province' => '25'
        ]); 
		//95
		DB::table('towns')->insert([
            'town_name' => 'Nemausus',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '771',
            'ycoord' => '1202',
            'region' => '6',
            'province' => '25'
        ]);
        //Gallia Lugdunensis
		//96
		DB::table('towns')->insert([
            'town_name' => 'Lugdunum',
            'climate' => 'alpine',
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
            'ycoord' => '1079',
            'region' => '6',
            'province' => '26'
        ]);
		//97
		DB::table('towns')->insert([
            'town_name' => 'Matisco',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '792',
            'ycoord' => '1037',
            'region' => '6',
            'province' => '26'
        ]);
		//98
		DB::table('towns')->insert([
            'town_name' => 'Divio',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes', 
            'pottery' => 'clay',
            'timber' => 'yew', 
			'xcoord' => '795',
            'ycoord' => '1003',
            'region' => '6',
            'province' => '26'
        ]);
		//99
		DB::table('towns')->insert([
            'town_name' => 'Augustodunum',
            'climate' => 'oceanic',
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
            'ycoord' => '1003',
            'region' => '6',
            'province' => '26'
        ]);
		//100
		DB::table('towns')->insert([
            'town_name' => 'Alesia',
            'climate' => 'oceanic',
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
            'ycoord' => '965',
            'region' => '6',
            'province' => '26'
        ]);  
		//101
		DB::table('towns')->insert([
            'town_name' => 'Andematunnum',
            'climate' => 'oceanic',
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
            'ycoord' => '940',
            'region' => '6',
            'province' => '26'
        ]);
        //Gallia Narbonensis
		//102
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
            'ycoord' => '1261',
            'region' => '6',
            'province' => '27'
        ]);  
		//103
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
            'ycoord' => '1257',
            'region' => '6',
            'province' => '27'
        ]);      
		//104
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
            'ycoord' => '1232',
            'region' => '6',
            'province' => '27'
        ]);
		//105
		DB::table('towns')->insert([
            'town_name' => 'Albigensium',
            'population' => '2000',
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
            'ycoord' => '1207',
            'region' => '6',
            'province' => '27'
        ]);  
		//106
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
            'ycoord' => '1179',
            'region' => '6',
            'province' => '27'
        ]);
		//107
		DB::table('towns')->insert([
            'town_name' => 'Aureliacum',
            'population' => '2000',
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
            'ycoord' => '1140',
            'region' => '6',
            'province' => '27'
        ]); 
		//108
		DB::table('towns')->insert([
            'town_name' => 'Agathe',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar', 
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes', 
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '727',
            'ycoord' => '1252',
            'region' => '6',
            'province' => '27'
        ]); 
        //Gallia Aquitania
		//109
		DB::table('towns')->insert([
            'town_name' => 'Aginnum',
            'climate' => 'oceanic',
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
            'ycoord' => '1191',
            'region' => '6',
            'province' => '28'
        ]);
		//110
		DB::table('towns')->insert([
            'town_name' => 'Burdigala',
            'climate' => 'oceanic',
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
            'ycoord' => '1144',
            'region' => '6',
            'province' => '28'
        ]);
		//111
		DB::table('towns')->insert([
            'town_name' => 'Augustoritum',
            'climate' => 'oceanic',
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
            'ycoord' => '1073',
            'region' => '6',
            'province' => '28'
        ]); 
		//112
		DB::table('towns')->insert([
            'town_name' => 'Gergovia',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'yew', 
			'xcoord' => '708',
            'ycoord' => '1075',
            'region' => '6',
            'province' => '28'
        ]);
		//113
		DB::table('towns')->insert([
            'town_name' => 'Aquensium',
            'population' => '2000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'silver' => 'silver',
            'timber' => 'oak', 
			'xcoord' => '494',
            'ycoord' => '1224',
            'region' => '6',
            'province' => '28'
        ]);
		//114
		DB::table('towns')->insert([
            'town_name' => 'Vesunna',
            'population' => '2000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '586',
            'ycoord' => '1120',
            'region' => '6',
            'province' => '28'
        ]);
		//115
		DB::table('towns')->insert([
            'town_name' => 'Cadurcorum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '620',
            'ycoord' => '1172',
            'region' => '6',
            'province' => '28'
        ]);
		//116
		DB::table('towns')->insert([
            'town_name' => 'Auscorum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '578',
            'ycoord' => '1230',
            'region' => '6',
            'province' => '28'
        ]);
        //Gallia Celtica
 		//117
         DB::table('towns')->insert([
            'town_name' => 'Limonum',
            'climate' => 'oceanic',
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
            'ycoord' => '1017',
            'region' => '6',
            'province' => '29'
        ]);
		//118
		DB::table('towns')->insert([
            'town_name' => 'Portus Namnetus',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '971',
            'region' => '6',
            'province' => '29'
        ]);
		//119
		DB::table('towns')->insert([
            'town_name' => 'Condate',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '905',
            'region' => '6',
            'province' => '29'
        ]);
		//120
		DB::table('towns')->insert([
            'town_name' => 'Vindinium',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '558',
            'ycoord' => '913',
            'region' => '6',
            'province' => '29'
        ]);
		//121
		DB::table('towns')->insert([
            'town_name' => 'Avaricum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '669',
            'ycoord' => '982',
            'region' => '6',
            'province' => '29'
        ]); 
		//122
		DB::table('towns')->insert([
            'town_name' => 'Turonum',
            'climate' => 'oceanic',
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
            'ycoord' => '959',
            'region' => '6',
            'province' => '29'
        ]); 
        //Gallia Senonia
		//123
		DB::table('towns')->insert([
            'town_name' => 'Cenabum',
            'climate' => 'oceanic',
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
            'ycoord' => '920',
            'region' => '6',
            'province' => '30'
        ]);    
		//124
		DB::table('towns')->insert([
            'town_name' => 'Lutetia',
            'climate' => 'oceanic',
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
            'ycoord' => '848',
            'region' => '6',
            'province' => '30'
        ]);
		//125
		DB::table('towns')->insert([
            'town_name' => 'Rotomagus',
            'climate' => 'oceanic',
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
            'ycoord' => '802',
            'region' => '6',
            'province' => '30'
        ]);
		//126
		DB::table('towns')->insert([
            'town_name' => 'Samarobriva',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '766',
            'region' => '6',
            'province' => '30'
        ]);
		//127
		DB::table('towns')->insert([
            'town_name' => 'Agedincum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '714',
            'ycoord' => '896',
            'region' => '6',
            'province' => '30'
        ]);
        //Belgica Prima
		//128
		DB::table('towns')->insert([
            'town_name' => 'Divodurum',
            'climate' => 'oceanic',
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
            'ycoord' => '815',
            'region' => '6',
            'province' => '31'
        ]);  
		//129
		DB::table('towns')->insert([
            'town_name' => 'Treverorum',
            'climate' => 'oceanic',
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
            'ycoord' => '786',
            'region' => '6',
            'province' => '31'
        ]);
        //Belgica Secunda
		//130
		DB::table('towns')->insert([
            'town_name' => 'Nemetacum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '693',
            'ycoord' => '723',
            'region' => '6',
            'province' => '32'
        ]);        
		//131
		DB::table('towns')->insert([
            'town_name' => 'Bagacum',
            'climate' => 'oceanic',
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
            'ycoord' => '726',
            'region' => '6',
            'province' => '32'
        ]);
		//132
		DB::table('towns')->insert([
            'town_name' => 'Gesioracum',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '628',
            'ycoord' => '699',
            'region' => '6',
            'province' => '32'
        ]);
		//133
		DB::table('towns')->insert([
            'town_name' => 'Durocorturum',
            'climate' => 'oceanic',
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
            'ycoord' => '777',
            'region' => '6',
            'province' => '32'
        ]); 
        //germania
        //Germania Inferior
		//134
		DB::table('towns')->insert([
            'town_name' => 'Tungrorum',
            'climate' => 'oceanic',
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
            'ycoord' => '693',
            'region' => '7',
            'province' => '33'
        ]); 
		//135
		DB::table('towns')->insert([
            'town_name' => 'Coriovallum',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'oak', 
			'xcoord' => '837',
            'ycoord' => '688',
            'region' => '7',
            'province' => '33'
        ]);        
		//136
		DB::table('towns')->insert([
            'town_name' => 'Noviomagus',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '613',
            'region' => '7',
            'province' => '33'
        ]);
		//137
		DB::table('towns')->insert([
            'town_name' => 'Castra Vetera',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '625',
            'region' => '7',
            'province' => '33'
        ]);
		//138
		DB::table('towns')->insert([
            'town_name' => 'Portus Batavorum',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '583',
            'region' => '7',
            'province' => '33'
        ]);
		//139
		DB::table('towns')->insert([
            'town_name' => 'Flevum',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '783',
            'ycoord' => '556',
            'region' => '7',
            'province' => '33'
        ]);
		//140
		DB::table('towns')->insert([
            'town_name' => 'Ubiorum',
            'climate' => 'oceanic',
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
            'ycoord' => '682',
            'region' => '7',
            'province' => '33'
        ]);
		//141
		DB::table('towns')->insert([
            'town_name' => 'Aliso',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '919',
            'ycoord' => '623',
            'region' => '7',
            'province' => '33'
        ]); 
		//142
		DB::table('towns')->insert([
            'town_name' => 'Confluentes',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '727',
            'region' => '7',
            'province' => '33'
        ]); 
        //Germania Superior
		//143
		DB::table('towns')->insert([
            'town_name' => 'Argentoratum',
            'climate' => 'oceanic',
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
            'ycoord' => '862',
            'region' => '7',
            'province' => '34'
        ]);
		//144
		DB::table('towns')->insert([
            'town_name' => 'Mogontiacum',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '771',
            'region' => '7',
            'province' => '34'
        ]);
		//145
		DB::table('towns')->insert([
            'town_name' => 'Castra Stativa',
            'population' => '5000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1013',
            'ycoord' => '825',
            'region' => '7',
            'province' => '34'
        ]);  
		//146
		DB::table('towns')->insert([
            'town_name' => 'Riusiava',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1023',
            'ycoord' => '861',
            'region' => '7',
            'province' => '34'
        ]);
		//147
		DB::table('towns')->insert([
            'town_name' => 'Biriciana',
            'population' => '5000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1107',
            'ycoord' => '802',
            'region' => '7',
            'province' => '34'
        ]); 
        //Germania Ulterior
		//148
		DB::table('towns')->insert([
            'town_name' => 'Arbalo',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '989',
            'ycoord' => '618',
            'region' => '7',
            'province' => '35'
        ]);
		//149
		DB::table('towns')->insert([
            'town_name' => 'Mattium',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1028',
            'ycoord' => '653',
            'region' => '7',
            'province' => '35'
        ]);  
		//150
		DB::table('towns')->insert([
            'town_name' => 'Fabiranum',
            'population' => '2000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '994',
            'ycoord' => '507',
            'region' => '7',
            'province' => '35'
        ]); 
		//151
		DB::table('towns')->insert([
            'town_name' => 'Treva',
            'population' => '2000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1047',
            'ycoord' => '468',
            'region' => '7',
            'province' => '35'
        ]);
		//152
		DB::table('towns')->insert([
            'town_name' => 'Bicurgium',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1105',
            'ycoord' => '676',
            'region' => '7',
            'province' => '35'
        ]);
		//153
		DB::table('towns')->insert([
            'town_name' => 'Menosgada',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1122',
            'ycoord' => '703',
            'region' => '7',
            'province' => '35'
        ]);
        //Bohemia
		//154
		DB::table('towns')->insert([
            'town_name' => 'Casurgis',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1282',
            'ycoord' => '751',
            'region' => '7',
            'province' => '36'
        ]);
		//155
		DB::table('towns')->insert([
            'town_name' => 'Bruna',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay',
            'timber' => 'oak', 
			'xcoord' => '1389',
            'ycoord' => '820',
            'region' => '7',
            'province' => '36'
        ]);
        //britannia
        //Britannia Prima
		//156
		DB::table('towns')->insert([
            'town_name' => 'Isca Dumnonum',
            'climate' => 'oceanic',
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
            'ycoord' => '701',
            'region' => '8',
            'province' => '37'
        ]);
		//157
		DB::table('towns')->insert([
            'town_name' => 'Aquae Sulis',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '649',
            'region' => '8',
            'province' => '37'
        ]); 
		//158
		DB::table('towns')->insert([
            'town_name' => 'Corinium',
            'climate' => 'oceanic',
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
            'ycoord' => '624',
            'region' => '8',
            'province' => '37'
        ]); 
        //Britannia Secunda
		//159
		DB::table('towns')->insert([
            'town_name' => 'Glevum',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '609',
            'region' => '8',
            'province' => '38'
        ]);
		//160
		DB::table('towns')->insert([
            'town_name' => 'Isca Silurum',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '631',
            'region' => '8',
            'province' => '38'
        ]);
		//161
		DB::table('towns')->insert([
            'town_name' => 'Moridunum',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '330',
            'ycoord' => '611',
            'region' => '8',
            'province' => '38'
        ]);
		//162
		DB::table('towns')->insert([
            'town_name' => 'Segontium',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '503',
            'region' => '8',
            'province' => '38'
        ]);  
		//163
		DB::table('towns')->insert([
            'town_name' => 'Deva',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '499',
            'region' => '8',
            'province' => '38'
        ]);
        //164
        DB::table('towns')->insert([
            'town_name' => 'Viroconium',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '539',
            'region' => '8',
            'province' => '38'
        ]); 
        //Britannia Caesariensis
		//165
		DB::table('towns')->insert([
            'town_name' => 'Portus Adurni',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '697',
            'region' => '8',
            'province' => '39'
        ]);   
		//166
		DB::table('towns')->insert([
            'town_name' => 'Londinium',
            'climate' => 'oceanic',
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
            'ycoord' => '640',
            'region' => '8',
            'province' => '39'
        ]);
		//167
		DB::table('towns')->insert([
            'town_name' => 'Verulamium',
            'climate' => 'oceanic',
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
            'ycoord' => '618',
            'region' => '8',
            'province' => '39'
        ]); 
		//168
		DB::table('towns')->insert([
            'town_name' => 'Camulodunum',
            'climate' => 'oceanic',
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
            'ycoord' => '605',
            'region' => '8',
            'province' => '39'
        ]);
		//169
		DB::table('towns')->insert([
            'town_name' => 'Icenorum',
            'climate' => 'oceanic',
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
            'ycoord' => '544',
            'region' => '8',
            'province' => '39'
        ]);       
        //Britannia Flavia
		//170
		DB::table('towns')->insert([
            'town_name' => 'Ratae Coritanorum',
            'climate' => 'oceanic',
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
            'ycoord' => '544',
            'region' => '8',
            'province' => '40'
        ]);
		//171
		DB::table('towns')->insert([
            'town_name' => 'Lindum',
            'climate' => 'oceanic',
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
            'ycoord' => '495',
            'region' => '8',
            'province' => '40'
        ]);  
        //Britannia Valentia
		//172
		DB::table('towns')->insert([
            'town_name' => 'Eboracum',
            'climate' => 'oceanic',
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
            'ycoord' => '432',
            'region' => '8',
            'province' => '41'
        ]);
		//173
		DB::table('towns')->insert([
            'town_name' => 'Bremetennacum',
            'population' => '5000',
            'climate' => 'oceanic',
            'pig' => 'pig', 
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'iron' => 'iron',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '425',
            'ycoord' => '451',
            'region' => '8',
            'province' => '41'
        ]); 
		//174
		DB::table('towns')->insert([
            'town_name' => 'Luguvalium',
            'population' => '5000',
            'climate' => 'oceanic',
            'wool' => 'sheep',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
            'timber' => 'oak', 
			'xcoord' => '400',
            'ycoord' => '352',
            'region' => '8',
            'province' => '41'
        ]);  
		//175
		DB::table('towns')->insert([
            'town_name' => 'Habitancum',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '327',
            'region' => '8',
            'province' => '41'
        ]);
        //caledonia
        //caledonia
		//176
		DB::table('towns')->insert([
            'town_name' => 'Trimontium',
            'population' => '5000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'dye' => 'woad', 
			'xcoord' => '416',
            'ycoord' => '301',
            'region' => '8',
            'province' => '42'
        ]);
		//177
		DB::table('towns')->insert([
            'town_name' => 'Curia',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '414',
            'ycoord' => '258',
            'region' => '8',
            'province' => '42'
        ]);
        //hibernia  
        //hibernia
		//178
		DB::table('towns')->insert([
            'town_name' => 'Eblana',
            'population' => '2000',
            'climate' => 'oceanic',
            'cattle' => 'cattle',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'oats',
            'pottery' => 'clay', 
            'timber' => 'oak', 
			'xcoord' => '232',
            'ycoord' => '485',
            'region' => '9',
            'province' => '43'
        ]);
        //Hispania
        //hispania tarraconensis
		//179
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
            'ycoord' => '1331',
            'region' => '10',
            'province' => '44'
        ]);  
		//180
		DB::table('towns')->insert([
            'town_name' => 'Aquae Calidae',
            'population' => '2000',
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
            'ycoord' => '1355',
            'region' => '10',
            'province' => '44'
        ]);
		//181
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
            'ycoord' => '1385',
            'region' => '10',
            'province' => '44'
        ]);  
		//182
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
            'ycoord' => '1403',
            'region' => '10',
            'province' => '44'
        ]);
		//183
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
            'ycoord' => '1369',
            'region' => '10',
            'province' => '44'
        ]);
		//184
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
            'ycoord' => '1365',
            'region' => '10',
            'province' => '44'
        ]);  
		//185
		DB::table('towns')->insert([
            'town_name' => 'Pompaelo',
            'climate' => 'oceanic',
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
            'ycoord' => '1286',
            'region' => '10',
            'province' => '44'
        ]);
		//186
		DB::table('towns')->insert([
            'town_name' => 'Calagurris',
            'climate' => 'oceanic',
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
            'ycoord' => '1322',
            'region' => '10',
            'province' => '44'
        ]);  
		//187
		DB::table('towns')->insert([
            'town_name' => 'Portus Victoriae',
            'population' => '2000',
            'climate' => 'oceanic',
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
            'ycoord' => '1243',
            'region' => '10',
            'province' => '44'
        ]);
		//188
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
            'ycoord' => '1475',
            'region' => '10',
            'province' => '44'
        ]);
        //189
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
            'ycoord' => '1369',
            'region' => '10',
            'province' => '44'
        ]);
		//190
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
            'ycoord' => '1345',
            'region' => '10',
            'province' => '44'
        ]);
        //hispania carthagiensis
		//191
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
            'ycoord' => '1513',
            'region' => '10',
            'province' => '45'
        ]);  
		//192
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
            'ycoord' => '1584',
            'region' => '10',
            'province' => '45'
        ]);
		//193
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
            'ycoord' => '1634',
            'region' => '10',
            'province' => '45'
        ]);  
        //194
		DB::table('towns')->insert([
            'town_name' => 'Mentesa',
            'population' => '2000',
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
            'ycoord' => '1542',
            'region' => '10',
            'province' => '45'
        ]);  
		//195
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
            'ycoord' => '1522',
            'region' => '10',
            'province' => '45'
        ]);
		//196
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
            'ycoord' => '1476',
            'region' => '10',
            'province' => '45'
        ]);
		//197
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
            'ycoord' => '1456',
            'region' => '10',
            'province' => '45'
        ]);  
		//198
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
            'ycoord' => '1429',
            'region' => '10',
            'province' => '45'
        ]);
        //hispania baetica
		//199
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
            'ycoord' => '1687',
            'region' => '10',
            'province' => '46'
        ]);  
		//200
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
            'ycoord' => '1689',
            'region' => '10',
            'province' => '46'
        ]);
		//201
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
            'ycoord' => '1701',
            'region' => '10',
            'province' => '46'
        ]);  
		//202
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
            'ycoord' => '1655',
            'region' => '10',
            'province' => '46'
        ]);
		//203
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
            'ycoord' => '1646',
            'region' => '10',
            'province' => '46'
        ]);
		//204
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
            'ycoord' => '1640',
            'region' => '10',
            'province' => '46'
        ]);  
		//205
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
            'ycoord' => '1636',
            'region' => '10',
            'province' => '46'
        ]);
		//206
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
			'xcoord' => '305',
            'ycoord' => '1614',
            'region' => '10',
            'province' => '46'
        ]);  
		//207
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
            'ycoord' => '1600',
            'region' => '10',
            'province' => '46'
        ]);
		//208
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
            'ycoord' => '1537',
            'region' => '10',
            'province' => '46'
        ]);
        //hispania ulterior
		//209
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
            'ycoord' => '1462',
            'region' => '10',
            'province' => '47'
        ]);  
		//210
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
            'ycoord' => '1411',
            'region' => '10',
            'province' => '47'
        ]);
		//211
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
            'ycoord' => '1432',
            'region' => '10',
            'province' => '47'
        ]);  
		//212
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
            'ycoord' => '1412',
            'region' => '10',
            'province' => '47'
        ]);
        //gallaecia
		//213
		DB::table('towns')->insert([
            'town_name' => 'Castra Legionis',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '1300',
            'region' => '10',
            'province' => '48'
        ]);
		//214
		DB::table('towns')->insert([
            'town_name' => 'Asturica',
            'population' => '5000',
            'climate' => 'oceanic',
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
            'ycoord' => '1313',
            'region' => '10',
            'province' => '48'
        ]);  
		//215
		DB::table('towns')->insert([
            'town_name' => 'Lucus',
            'climate' => 'oceanic',
            'pig' => 'pig',
            'rabbit' => 'rabbit',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'tin' => 'tin',
            'timber' => 'yew',
			'xcoord' => '164',
            'ycoord' => '1274',
            'region' => '10',
            'province' => '48'
        ]);
        //lusitania
		//216
		DB::table('towns')->insert([
            'town_name' => 'Aquae Flaviae',
            'population' => '2000',
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
            'ycoord' => '1361',
            'region' => '10',
            'province' => '49'
        ]);  
		//217
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
            'ycoord' => '1373',
            'region' => '10',
            'province' => '49'
        ]);
		//218
		DB::table('towns')->insert([
            'town_name' => 'Portus Cale',
            'population' => '2000',
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
            'ycoord' => '1399',
            'region' => '10',
            'province' => '49'
        ]);
		//219
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
            'ycoord' => '1439',
            'region' => '10',
            'province' => '49'
        ]);  
		//220
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
            'ycoord' => '1474',
            'region' => '10',
            'province' => '49'
        ]);
		//221
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
            'ycoord' => '1561',
            'region' => '10',
            'province' => '49'
        ]);  
        //222
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
            'ycoord' => '1450',
            'region' => '10',
            'province' => '49'
        ]);  
		//223
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
            'ycoord' => '1546',
            'region' => '10',
            'province' => '49'
        ]);
		//224
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
            'ycoord' => '1583',
            'region' => '10',
            'province' => '49'
        ]);
		//225
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
            'ycoord' => '1575',
            'region' => '10',
            'province' => '49'
        ]);  
		//226
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
            'ycoord' => '1609',
            'region' => '10',
            'province' => '49'
        ]);
        //227
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
            'ycoord' => '1663',
            'region' => '10',
            'province' => '49'
        ]); 
        //Balearis Maior
        //Balearis Maior
        //228
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
            'ycoord' => '1506',
            'region' => '11',
            'province' => '50'
        ]);
        //Balearis Ebusus
        //Balearis Ebusus
		//229
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
            'ycoord' => '1548',
            'region' => '12',
            'province' => '51'
        ]);
        //Mauretania
        //mauretania tingitana 
		//230
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
            'ycoord' => '1740',
            'region' => '13',
            'province' => '52'
        ]);
		//231
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
            'ycoord' => '1747',
            'region' => '13',
            'province' => '52'
        ]);
		//232
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
            'ycoord' => '1766',
            'region' => '13',
            'province' => '52'
        ]);  
		//233
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
            'ycoord' => '1839',
            'region' => '13',
            'province' => '52'
        ]);
        //234
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
            'ycoord' => '1842',
            'region' => '13',
            'province' => '52'
        ]);  
		//235
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
            'ycoord' => '1779',
            'region' => '13',
            'province' => '52'
        ]);
        //mauretania caesariensis
		//236
		DB::table('towns')->insert([
            'town_name' => 'Pomaria',
            'population' => '5000',
            'climate' => 'hot steppe',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '482',
            'ycoord' => '1819',
            'region' => '13',
            'province' => '53'
        ]);
		//237
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
            'ycoord' => '1739',
            'region' => '13',
            'province' => '53'
        ]);  
		//238
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
            'ycoord' => '1701',
            'region' => '13',
            'province' => '53'
        ]);
        //239
		DB::table('towns')->insert([
            'town_name' => 'Tingarta',
            'population' => '5000',
            'climate' => 'hot steppe',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '616',
            'ycoord' => '1775',
            'region' => '13',
            'province' => '53'
        ]);  
		//240
		DB::table('towns')->insert([
            'town_name' => 'Fallaba',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '712',
            'ycoord' => '1817',
            'region' => '13',
            'province' => '53'
        ]);
		//241
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
            'ycoord' => '1697',
            'region' => '13',
            'province' => '53'
        ]);
		//242
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
            'ycoord' => '1687',
            'region' => '13',
            'province' => '53'
        ]);  
        //mauretania sitifensis
		//243
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
            'ycoord' => '1687',
            'region' => '13',
            'province' => '54'
        ]);
        //244
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
            'ycoord' => '1723',
            'region' => '13',
            'province' => '54'
        ]);  
        //numidia cirtensis
		//245
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
            'ycoord' => '1678',
            'region' => '14',
            'province' => '55'
        ]);
		//246
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
            'ycoord' => '1679',
            'region' => '14',
            'province' => '55'
        ]);
		//247
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
            'ycoord' => '1706',
            'region' => '14',
            'province' => '55'
        ]);  
		//248
		DB::table('towns')->insert([
            'town_name' => 'Thagaste',
            'pack' => 'horse',
            'wool' => 'goat',            
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'iron' => 'iron',
            'timber' => 'oak', 
			'xcoord' => '951',
            'ycoord' => '1718',
            'region' => '14',
            'province' => '55'
        ]);
        //249
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
            'ycoord' => '1713',
            'region' => '14',
            'province' => '55'
        ]);  
		//250
		DB::table('towns')->insert([
            'town_name' => 'Theveste',
            'pack' => 'horse',
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
            'ycoord' => '1772',
            'region' => '14',
            'province' => '55'
        ]);
        //numidia militana
		//251
		DB::table('towns')->insert([
            'town_name' => 'Aquae Flavianae',
            'population' => '2000',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '910',
            'ycoord' => '1768',
            'region' => '14',
            'province' => '56'
        ]);
		//252
		DB::table('towns')->insert([
            'town_name' => 'Thamugadi',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '886',
            'ycoord' => '1768',
            'region' => '14',
            'province' => '56'
        ]);  
		//253
		DB::table('towns')->insert([
            'town_name' => 'Lambaesis',
            'population' => '5000',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
            'sculpture' => 'ivory',
			'xcoord' => '862',
            'ycoord' => '1764',
            'region' => '14',
            'province' => '56'
        ]);
        //254
		DB::table('towns')->insert([
            'town_name' => 'Vescera',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'juniper', 
			'xcoord' => '838',
            'ycoord' => '1807',
            'region' => '14',
            'province' => '56'
        ]);     
        //africa
        //africa zeugitana 
		//255
		DB::table('towns')->insert([
            'town_name' => 'Bulla Regia',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress', 
			'xcoord' => '993',
            'ycoord' => '1704',
            'region' => '15',
            'province' => '57'
        ]);
		//256
		DB::table('towns')->insert([
            'town_name' => 'Thugga',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'timber' => 'cypress', 
			'xcoord' => '1015',
            'ycoord' => '1713',
            'region' => '15',
            'province' => '57'
        ]);
		//257
		DB::table('towns')->insert([
            'town_name' => 'Hippo Zarytus',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'indigo',
            'timber' => 'cypress', 
			'xcoord' => '1048',
            'ycoord' => '1655',
            'region' => '15',
            'province' => '57'
        ]); 
		//258
		DB::table('towns')->insert([
            'town_name' => 'Utica',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'dye' => 'indigo',
            'timber' => 'cypress', 
			'xcoord' => '1057',
            'ycoord' => '1670',
            'region' => '15',
            'province' => '57'
        ]);
		//259
		DB::table('towns')->insert([
            'town_name' => 'Carthago',
            'population' => '50000',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'iron' => 'iron',
            'silver' => 'silver',
            'pottery' => 'clay',
            'dye' => 'indigo',
            'timber' => 'cypress', 
			'xcoord' => '1070',
            'ycoord' => '1680',
            'region' => '15',
            'province' => '57'
        ]); 
        //Africa Byzacium
        
        //Africa Emporia

        //Africa Tripolitana

        //Phasania

        //Garamantia

        //Aegyptus
        //Cyrenaica

        //Marmarica

        //Aegyptus Inferior

        //Aegyptus Herculia

        //Aegyptus Heptanomis

        //Aegyptus Thebais

        //Cyprus
        //Cyprus
		DB::table('towns')->insert([
            'town_name' => 'Salamus',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'cypress',
            'glass' => 'glass',
			'xcoord' => '2265',
            'ycoord' => '1788',
            'region' => '17',
            'province' => '69'
        ]);
		DB::table('towns')->insert([
            'town_name' => 'Paphus',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2188',
            'ycoord' => '1811',
            'region' => '17',
            'province' => '69'
        ]);
        //creta
        //creta
		//
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
            'ycoord' => '1764',
            'region' => '18',
            'province' => '70'
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
            'ycoord' => '1775',
            'region' => '18',
            'province' => '70'
        ]);
        //cyclades
        //cyclades
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
            'ycoord' => '1645',
            'region' => '19',
            'province' => '71'
        ]);
        //rhodus
        //rhodus
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
            'ycoord' => '1707',
            'region' => '20',
            'province' => '72'
        ]);
        //achaea
        //laconia
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
            'ycoord' => '1665',
            'region' => '21',
            'province' => '73'
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
            'ycoord' => '1684',
            'region' => '21',
            'province' => '73'
        ]);
        //messenia
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
            'ycoord' => '1658',
            'region' => '21',
            'province' => '74'
        ]);
        //arcadia
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
            'ycoord' => '1649',
            'region' => '21',
            'province' => '75'
        ]);
        //elis
		//
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
            'ycoord' => '1627',
            'region' => '21',
            'province' => '76'
        ]);
        //achaea
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
            'ycoord' => '1592',
            'region' => '21',
            'province' => '77'
        ]);  
        //argolis
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
            'ycoord' => '1633',
            'region' => '21',
            'province' => '78'
        ]);
        //corinthia
		//
		DB::table('towns')->insert([
            'town_name' => 'Corinthus',
            'population' => '50000',
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
            'ycoord' => '1611',
            'region' => '21',
            'province' => '79'
        ]);
        //hellas
        //attica
		//
		DB::table('towns')->insert([
            'town_name' => 'Athenae',
            'population' => '50000',
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
            'ycoord' => '1606',
            'region' => '22',
            'province' => '80'
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
            'ycoord' => '1612',
            'region' => '22',
            'province' => '80'
        ]);
        //boeotia
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
            'ycoord' => '1585',
            'region' => '22',
            'province' => '81'
        ]);
		//
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
            'ycoord' => '1577',
            'region' => '22',
            'province' => '81'
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
            'ycoord' => '1569',
            'region' => '22',
            'province' => '81'
        ]);
        //aetolia
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
            'ycoord' => '1567',
            'region' => '22',
            'province' => '82'
        ]);
        //acarnania
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
            'ycoord' => '1526',
            'region' => '22',
            'province' => '83'
        ]);
        //magnesia
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
            'ycoord' => '1519',
            'region' => '22',
            'province' => '84'
        ]);
        //thessalia
		//
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
            'ycoord' => '1499',
            'region' => '22',
            'province' => '85'
        ]);
        //macedonia
        //epirus
		//
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
            'ycoord' => '1493',
            'region' => '23',
            'province' => '86'
        ]);
		//
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
            'ycoord' => '1390',
            'region' => '23',
            'province' => '86'
        ]);
        //Macedonia Salutaris
        //
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
            'ycoord' => '1425',
            'region' => '23',
            'province' => '87'
        ]);
		//
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
            'ycoord' => '1437',
            'region' => '23',
            'province' => '87'
        ]);
		//
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
            'ycoord' => '1403',
            'region' => '23',
            'province' => '87'
        ]);
        //Paeonia
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
            'ycoord' => '1381',
            'region' => '23',
            'province' => '88'
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
            'ycoord' => '1380',
            'region' => '23',
            'province' => '88'
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
            'ycoord' => '1288',
            'region' => '23',
            'province' => '88'
        ]);
        //thracia
        //Rhodope
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
            'ycoord' => '1421',
            'region' => '24',
            'province' => '89'
        ]);
        //europa
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
            'ycoord' => '1409',
            'region' => '24',
            'province' => '90'
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
            'ycoord' => '1409',
            'region' => '24',
            'province' => '90'
        ]);
        //Thracia Salutaris
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
            'ycoord' => '1332',
            'region' => '24',
            'province' => '91'
        ]);  
        //Thracia Haemimontus
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
            'ycoord' => '1377',
            'region' => '24',
            'province' => '92'
        ]);
        //Moesia
		//
		DB::table('towns')->insert([
            'town_name' => 'Storgasia',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1796',
            'ycoord' => '1243',
            'region' => '24',
            'province' => '93'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Odessus',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1962',
            'ycoord' => '1260',
            'region' => '24',
            'province' => '93'
        ]);   
		//
		DB::table('towns')->insert([
            'town_name' => 'Antheia',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1946',
            'ycoord' => '1314',
            'region' => '24',
            'province' => '93'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Tomis',
            'climate' => 'pontic',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1998',
            'ycoord' => '1191',
            'region' => '24',
            'province' => '93'
        ]);         
		//
		DB::table('towns')->insert([
            'town_name' => 'Durostorum',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '1930',
            'ycoord' => '1191',
            'region' => '24',
            'province' => '93'
        ]); 
		//
		DB::table('towns')->insert([
            'town_name' => 'Noviodunum',
            'population' => '5000',
            'climate' => 'pontic',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
			'xcoord' => '2003',
            'ycoord' => '1120',
            'region' => '24',
            'province' => '93'
        ]);
        //Illyricum
        //Dardania 
		//
		DB::table('towns')->insert([
            'town_name' => 'Scupi',
            'climate' => 'continental',
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
            'ycoord' => '1343',
            'region' => '25',
            'province' => '94'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Naissus',
            'climate' => 'continental',
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
            'ycoord' => '1250',
            'region' => '25',
            'province' => '94'
        ]);
        //Prevalitana
		//
		DB::table('towns')->insert([
            'town_name' => 'Doclea',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1524',
            'ycoord' => '1311',
            'region' => '25',
            'province' => '95'
        ]);
        //Dalmatia
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
            'ycoord' => '1239',
            'region' => '25',
            'province' => '96'
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
            'ycoord' => '1272',
            'region' => '25',
            'province' => '96'
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
            'ycoord' => '1225',
            'region' => '25',
            'province' => '96'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Capedunum',
            'population' => '2000',
            'wool' => 'goat',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'cypress', 
			'xcoord' => '1551',
            'ycoord' => '1214',
            'region' => '25',
            'province' => '96'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Sulphurae',
            'population' => '2000',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'cypress', 
			'xcoord' => '1480',
            'ycoord' => '1214',
            'region' => '25',
            'province' => '96'
        ]);
        //Liburnia
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
            'ycoord' => '1196',
            'region' => '25',
            'province' => '97'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Burnum',
            'population' => '5000',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'gold' => 'gold', 
            'timber' => 'cypress', 
			'xcoord' => '1366',
            'ycoord' => '1202',
            'region' => '25',
            'province' => '97'
        ]);         
        //Histria
        //
		DB::table('towns')->insert([
            'town_name' => 'Tergeste',
            'climate' => 'pontic',
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
            'ycoord' => '1086',
            'region' => '25',
            'province' => '98'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Tarsatica',
            'climate' => 'pontic',
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
            'ycoord' => '1109',
            'region' => '25',
            'province' => '98'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Pola',
            'climate' => 'pontic',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'durum',
            'vine' => 'grapes',
            'timber' => 'beech', 
			'xcoord' => '1248',
            'ycoord' => '1146',
            'region' => '25',
            'province' => '98'
        ]); 
        //Pannonia Prima
		//
		DB::table('towns')->insert([
            'town_name' => 'Carnuntum',
            'population' => '5000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1408',
            'ycoord' => '902',
            'region' => '25',
            'province' => '99'
        ]); 
        //Pannonia Secunda
		//
		DB::table('towns')->insert([
            'town_name' => 'Sirmium',
            'climate' => 'continental',
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
            'ycoord' => '1135',
            'region' => '25',
            'province' => '100'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Singidunum',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'beech', 
			'xcoord' => '1582',
            'ycoord' => '1148',
            'region' => '25',
            'province' => '100'
        ]);       
		//
		DB::table('towns')->insert([
            'town_name' => 'Viminacium',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay', 
            'timber' => 'beech', 
			'xcoord' => '1623',
            'ycoord' => '1159',
            'region' => '25',
            'province' => '100'
        ]);
        //Pannonia Savia
		//
		DB::table('towns')->insert([
            'town_name' => 'Poetovio',
            'population' => '5000',
            'climate' => 'continental',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1343',
            'ycoord' => '1023',
            'region' => '25',
            'province' => '101'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Iasae',
            'population' => '2000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1375',
            'ycoord' => '1039',
            'region' => '25',
            'province' => '101'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Balissae',
            'population' => '2000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1425',
            'ycoord' => '1073',
            'region' => '25',
            'province' => '101'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Siscia',
            'climate' => 'continental',
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
            'ycoord' => '1098',
            'region' => '25',
            'province' => '101'
        ]);   
		//
		DB::table('towns')->insert([
            'town_name' => 'Metulum',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1333',
            'ycoord' => '1098',
            'region' => '25',
            'province' => '101'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Marsonia',
            'population' => '2000',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'spelt',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1458',
            'ycoord' => '1116',
            'region' => '25',
            'province' => '101'
        ]);
        //Pannonia Valeria
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquincum',
            'climate' => 'continental',
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
            'ycoord' => '951',
            'region' => '25',
            'province' => '102'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Gorsium',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'iron' => 'iron',
			'xcoord' => '1480',
            'ycoord' => '976',
            'region' => '25',
            'province' => '102'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Sopianae',
            'population' => '2000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
			'xcoord' => '1472',
            'ycoord' => '1055',
            'region' => '25',
            'province' => '102'
        ]); 
        //dacia
        //Dacia Apulensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Partiscum',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'juniper', 
			'xcoord' => '1625',
            'ycoord' => '1012',
            'region' => '26',
            'province' => '103'
        ]); 
		//
		DB::table('towns')->insert([
            'town_name' => 'Apulum',
            'climate' => 'continental',
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
            'ycoord' => '1045',
            'region' => '26',
            'province' => '103'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Micia',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1710',
            'ycoord' => '1065',
            'region' => '26',
            'province' => '103'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Sarmizegetusa',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'pine', 
			'xcoord' => '1706',
            'ycoord' => '1081',
            'region' => '26',
            'province' => '103'
        ]);      
		//
		DB::table('towns')->insert([
            'town_name' => 'Tibiscum',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
            'sculpture' => 'marble', 
			'xcoord' => '1679',
            'ycoord' => '1086',
            'region' => '26',
            'province' => '103'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Argidava',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1671',
            'ycoord' => '1103',
            'region' => '26',
            'province' => '103'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Aquae Herculi',
            'population' => '2000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1686',
            'ycoord' => '1138',
            'region' => '26',
            'province' => '103'
        ]); 
		//
		DB::table('towns')->insert([
            'town_name' => 'Petrodava',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1883',
            'ycoord' => '991',
            'region' => '26',
            'province' => '103'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Cotnari',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1900',
            'ycoord' => '969',
            'region' => '26',
            'province' => '103'
        ]); 
        //Dacia Malvensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Drobeta',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1693',
            'ycoord' => '1159',
            'region' => '26',
            'province' => '104'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Castra Traiana',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'timber' => 'pine', 
			'xcoord' => '1781',
            'ycoord' => '1125',
            'region' => '26',
            'province' => '104'
        ]);  
		//
		DB::table('towns')->insert([
            'town_name' => 'Cumidava',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'gold' => 'gold',
            'timber' => 'pine', 
			'xcoord' => '1846',
            'ycoord' => '1091',
            'region' => '26',
            'province' => '104'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Malva',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'gold' => 'gold', 
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1781',
            'ycoord' => '1176',
            'region' => '26',
            'province' => '104'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Oescus',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1790',
            'ycoord' => '1211',
            'region' => '26',
            'province' => '104'
        ]); 
        //Dacia Porolissensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Porolissum',
            'population' => '5000',
            'climate' => 'continental',
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
            'ycoord' => '973',
            'region' => '26',
            'province' => '105'
        ]);
		//
		DB::table('towns')->insert([
            'town_name' => 'Napoca',
            'population' => '5000',
            'climate' => 'continental',
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
            'ycoord' => '1004',
            'region' => '26',
            'province' => '105'
        ]);
        //Dacia Ripensis
		//
		DB::table('towns')->insert([
            'town_name' => 'Felix Romulania',
            'population' => '5000',
            'climate' => 'continental',
            'pig' => 'pig',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'pine', 
			'xcoord' => '1666',
            'ycoord' => '1199',
            'region' => '26',
            'province' => '106'
        ]);


        /*

		//
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
        */
    }
}
