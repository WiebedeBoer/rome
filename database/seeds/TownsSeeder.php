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
            'population' => '100000',
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
            'population' => '20000',
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
            'population' => '20000',
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
		//26
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
		//27
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
		//28
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
		//29
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
		//30
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
		//31
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
		//32
		DB::table('towns')->insert([
            'town_name' => 'Pisa',
            'population' => '20000',
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
		//33
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
		//34
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
		//35
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
		//36
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
		//37
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
		//38
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
		//39
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
		//40
		DB::table('towns')->insert([
            'town_name' => 'Catania',
            'population' => '20000',
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
		//41
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
		//42
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
		//43
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
		//44
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
		//45
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
		//46
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
		//47
		DB::table('towns')->insert([
            'town_name' => 'Bononia',
            'population' => '20000',
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
		//48
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
		//49
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
		//50
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
		//51
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
		//52
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
		//53
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
		//54
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
		//55
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
		//56
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
		//57
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
		//58
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
		//59
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
		//60
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
		//61
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
		//62
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
		//63
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
		//64
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
		//65
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
		//66
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
		//67
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
		//68
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
		//69
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
		//70
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
		//71
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
		//72
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
		//73
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
		//74
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
		//75
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
		//76
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
		//77
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
		//78
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
		//79
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
		//80
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
		//81
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
		//82
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
		//83
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
		//84
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
		//85
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
		//86
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
		//87
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
		//88
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
		//89
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
		//90
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
		//91
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
		//92
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
		//93
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
		//94
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
		//95
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
		//96
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
		//97
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
		//98
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
		//99
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
		//100
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
		//101
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
		//102
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
		//103
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
		//104
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
            'ycoord' => '1261',
            'region' => '6',
            'province' => '27'
        ]);  
		//106
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
		//107
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
		//108
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
		//109
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
		//110
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
		//111
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
		//112
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
		//113
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
		//114
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
		//115
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
		//116
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
		//117
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
		//118
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
		//119
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
 		//120
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
		//121
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
		//122
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
		//123
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
		//124
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
		//125
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
		//126
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
		//127
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
		//128
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
		//129
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
		//130
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
		//131
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
		//132
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
		//133
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
		//134
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
		//135
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
		//136
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
		//137
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
		//138
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
		//139
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
		//140
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
		//141
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
		//142
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
		//143
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
		//144
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
		//145
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
		//146
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
		//147
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
		//148
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
		//149
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
		//150
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
		//151
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
		//152
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
		//153
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
		//154
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
		//155
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
		//156
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
		//157
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
		//158
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
		//159
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
		//160
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
		//161
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
		//162
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
		//163
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
		//164
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
		//165
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
		//166
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
        //167
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
		//168
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
		//169
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
		//170
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
		//171
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
		//172
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
		//173
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
		//174
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
		//175
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
		//176
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
		//177
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
		//178
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
		//179
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
		//180
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
		//181
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
		//182
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
		//183
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
		//184
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
		//185
		DB::table('towns')->insert([
            'town_name' => 'Tarraco',
            'population' => '20000',
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
		//186
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
		//187
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
		//188
		DB::table('towns')->insert([
            'town_name' => 'Pompaelo',
            'population' => '20000',
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
		//189
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
		//190
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
		//191
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
        //192
		DB::table('towns')->insert([
            'town_name' => 'Clunia Sulpicia',
            'climate' => 'cold steppe',
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
		//193
		DB::table('towns')->insert([
            'town_name' => 'Pallantia',
            'climate' => 'cold steppe',
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
		//194
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
		//195
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
		//196
		DB::table('towns')->insert([
            'town_name' => 'Carthago Nova',
            'population' => '20000',
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
        //197
		DB::table('towns')->insert([
            'town_name' => 'Mentesa',
            'population' => '2000',
            'climate' => 'cold steppe',
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
		//198
		DB::table('towns')->insert([
            'town_name' => 'Libisosanorum',
            'climate' => 'cold steppe',
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
		//199
		DB::table('towns')->insert([
            'town_name' => 'Valeria',
            'climate' => 'cold steppe',
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
		//200
		DB::table('towns')->insert([
            'town_name' => 'Segobriga',
            'climate' => 'cold steppe',
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
		//201
		DB::table('towns')->insert([
            'town_name' => 'Ercavica',
            'climate' => 'cold steppe',
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
		//202
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
		//203
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
		//204
		DB::table('towns')->insert([
            'town_name' => 'Gadeira',
            'population' => '50000',
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
		//205
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
		//206
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
		//207
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
		//208
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
		//209
		DB::table('towns')->insert([
            'town_name' => 'Corduba',
            'population' => '20000',
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
		//210
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
		//211
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
		//212
		DB::table('towns')->insert([
            'town_name' => 'Toletum',
            'climate' => 'cold steppe',
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
		//213
		DB::table('towns')->insert([
            'town_name' => 'Segovia',
            'climate' => 'cold steppe',
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
		//214
		DB::table('towns')->insert([
            'town_name' => 'Abula',
            'climate' => 'cold steppe',
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
		//215
		DB::table('towns')->insert([
            'town_name' => 'Salamanca',
            'climate' => 'cold steppe',
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
		//216
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
		//217
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
		//218
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
		//219
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
		//220
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
		//221
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
		//222
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
		//223
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
		//224
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
        //225
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
		//226
		DB::table('towns')->insert([
            'town_name' => 'Emerita',
            'population' => '20000',
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
		//227
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
		//228
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
		//229
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
        //230
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
        //231
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
		//232
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
		//233
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
		//234
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
		//235
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
		//236
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
        //237
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
		//238
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
		//239
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
		//240
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
		//241
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
        //242
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
		//243
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
		//244
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
		//245
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
		//246
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
        //247
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
		//248
		DB::table('towns')->insert([
            'town_name' => 'Russicada',
            'population' => '20000',
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
		//249
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
		//250
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
		//251
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
        //252
		DB::table('towns')->insert([
            'town_name' => 'Cirta',
            'population' => '20000',
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
		//253
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
		//254
		DB::table('towns')->insert([
            'town_name' => 'Mactaris',
            'population' => '5000',
            'cattle' => 'cattle',
            'wool' => 'goat',            
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress', 
			'xcoord' => '1020',
            'ycoord' => '1746',
            'region' => '14',
            'province' => '55'
        ]);
		//255
		DB::table('towns')->insert([
            'town_name' => 'Sicca Veneria',
            'population' => '20000',
            'cattle' => 'cattle',
            'wool' => 'goat',            
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress', 
			'xcoord' => '996',
            'ycoord' => '1728',
            'region' => '14',
            'province' => '55'
        ]);
		//256
		DB::table('towns')->insert([
            'town_name' => 'Zama Regia',
            'cattle' => 'cattle',
            'wool' => 'goat',            
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress', 
			'xcoord' => '1026',
            'ycoord' => '1727',
            'region' => '14',
            'province' => '55'
        ]);
        //numidia militana
		//257
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
		//258
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
		//259
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
        //260
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
            'timber' => 'palm', 
			'xcoord' => '838',
            'ycoord' => '1807',
            'region' => '14',
            'province' => '56'
        ]);      
        //africa
        //africa zeugitana 
		//261
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
		//262
		DB::table('towns')->insert([
            'town_name' => 'Thugga',
            'population' => '20000',
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
		//263
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
		//264
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
		//265
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
		//266
		DB::table('towns')->insert([
            'town_name' => 'Hadrumetum',
            'population' => '20000',
            'pack' => 'horse',
            'wool' => 'goat',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'dye' => 'indigo',
            'timber' => 'cypress', 
			'xcoord' => '1085',
            'ycoord' => '1745',
            'region' => '15',
            'province' => '58'
        ]);  
		//267
		DB::table('towns')->insert([
            'town_name' => 'Thaenae',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cypress', 
            'sculpture' => 'marble', 
			'xcoord' => '1092',
            'ycoord' => '1811',
            'region' => '15',
            'province' => '58'
        ]); 
		//268
		DB::table('towns')->insert([
            'town_name' => 'Sufetula',
            'climate' => 'hot steppe',
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
            'timber' => 'palm', 
			'xcoord' => '1025',
            'ycoord' => '1794',
            'region' => '15',
            'province' => '58'
        ]); 
		//269
		DB::table('towns')->insert([
            'town_name' => 'Thelepte',
            'climate' => 'hot steppe',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'palm', 
			'xcoord' => '993',
            'ycoord' => '1804',
            'region' => '15',
            'province' => '58'
        ]);       
        //Africa Emporia
		//270
		DB::table('towns')->insert([
            'town_name' => 'Capsa',
            'climate' => 'hot steppe',
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
            'timber' => 'palm', 
			'xcoord' => '996',
            'ycoord' => '1835',
            'region' => '15',
            'province' => '59'
        ]); 
		//271
		DB::table('towns')->insert([
            'town_name' => 'Tacape',
            'climate' => 'hot steppe',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'palm', 
            'sculpture' => 'marble', 
			'xcoord' => '1059',
            'ycoord' => '1864',
            'region' => '15',
            'province' => '59'
        ]); 
        //Africa Tripolitana
		//272
		DB::table('towns')->insert([
            'town_name' => 'Sabrata',
            'climate' => 'hot steppe',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'dye' => 'indigo',
            'timber' => 'palm', 
			'xcoord' => '1175',
            'ycoord' => '1929',
            'region' => '15',
            'province' => '60'
        ]); 
		//273
		DB::table('towns')->insert([
            'town_name' => 'Oea',
            'climate' => 'hot steppe',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'dye' => 'indigo',
            'timber' => 'palm', 
			'xcoord' => '1214',
            'ycoord' => '1924',
            'region' => '15',
            'province' => '60'
        ]); 
		//274
		DB::table('towns')->insert([
            'town_name' => 'Leptis Magna',
            'climate' => 'hot steppe',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'dye' => 'indigo',
            'timber' => 'palm', 
			'xcoord' => '1269',
            'ycoord' => '1939',
            'region' => '15',
            'province' => '60'
        ]); 
		//275
		DB::table('towns')->insert([
            'town_name' => 'Macomedes',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'dye' => 'indigo',
            'timber' => 'palm', 
			'xcoord' => '1386',
            'ycoord' => '2025',
            'region' => '15',
            'province' => '60'
        ]); 
        //Phasania
		//276
		DB::table('towns')->insert([
            'town_name' => 'Cydamus',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory', 
			'xcoord' => '1019',
            'ycoord' => '2054',
            'region' => '15',
            'province' => '61'
        ]); 
        //Garamantia
		//277
		DB::table('towns')->insert([
            'town_name' => 'Germa',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory', 
			'xcoord' => '1276',
            'ycoord' => '2268',
            'region' => '15',
            'province' => '62'
        ]); 
		//278
		DB::table('towns')->insert([
            'town_name' => 'Ghat',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory', 
			'xcoord' => '1194',
            'ycoord' => '2294',
            'region' => '15',
            'province' => '62'
        ]); 
        //Aegyptus
        //Cyrenaica
		//279
		DB::table('towns')->insert([
            'town_name' => 'Berenice',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '1563',
            'ycoord' => '1968',
            'region' => '16',
            'province' => '63'
        ]); 
		//280
		DB::table('towns')->insert([
            'town_name' => 'Cyrene',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '1654',
            'ycoord' => '1928',
            'region' => '16',
            'province' => '63'
        ]); 
		//281
		DB::table('towns')->insert([
            'town_name' => 'Antipyrgus',
            'population' => '2000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '1761',
            'ycoord' => '1973',
            'region' => '16',
            'province' => '63'
        ]); 
        //Marmarica
		//282
		DB::table('towns')->insert([
            'town_name' => 'Paraetonium',
            'climate' => 'desert oasis',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'salt' => 'salt',
            'timber' => 'palm', 
			'xcoord' => '1926',
            'ycoord' => '2016',
            'region' => '16',
            'province' => '64'
        ]); 
		//283
		DB::table('towns')->insert([
            'town_name' => 'Ammonium',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory',
			'xcoord' => '1831',
            'ycoord' => '2141',
            'region' => '16',
            'province' => '64'
        ]); 
        //Aegyptus Inferior
        //284
		DB::table('towns')->insert([
            'town_name' => 'Alexandria',
            'population' => '100000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus',             
            'glass' => 'glass', 
			'xcoord' => '2060',
            'ycoord' => '2026',
            'region' => '16',
            'province' => '65'
        ]); 
        //285
		DB::table('towns')->insert([
            'town_name' => 'Bolbitinum',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2083',
            'ycoord' => '2013',
            'region' => '16',
            'province' => '65'
        ]); 
        //286
		DB::table('towns')->insert([
            'town_name' => 'Sais',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2107',
            'ycoord' => '2047',
            'region' => '16',
            'province' => '65'
        ]); 
        //287
		DB::table('towns')->insert([
            'town_name' => 'Leontopolis',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2142',
            'ycoord' => '2062',
            'region' => '16',
            'province' => '65'
        ]); 
        //288
		DB::table('towns')->insert([
            'town_name' => 'Memphis',
            'population' => '20000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'copper' => 'copper', 
            'gold' => 'gold', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2130',
            'ycoord' => '2101',
            'region' => '16',
            'province' => '65'
        ]); 
        //Aegyptus Herculia
        //289
		DB::table('towns')->insert([
            'town_name' => 'Tamiathis',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2160',
            'ycoord' => '2014',
            'region' => '16',
            'province' => '66'
        ]); 
        //290
		DB::table('towns')->insert([
            'town_name' => 'Tanis',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'cattle' => 'cattle',
            'pig' => 'pig',
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder',
            'timber' => 'palm', 
            'paper' => 'papyrus', 
            'glass' => 'glass', 
			'xcoord' => '2176',
            'ycoord' => '2046',
            'region' => '16',
            'province' => '66'
        ]); 
        //291
		DB::table('towns')->insert([
            'town_name' => 'Pelusium',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'copper' => 'copper', 
            'gold' => 'gold', 
            'timber' => 'palm', 
			'xcoord' => '2197',
            'ycoord' => '2035',
            'region' => '16',
            'province' => '66'
        ]); 
        //Aegyptus Heptanomis
        //292
		DB::table('towns')->insert([
            'town_name' => 'Heracleapolis',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2121',
            'ycoord' => '2153',
            'region' => '16',
            'province' => '67'
        ]); 
        //293
		DB::table('towns')->insert([
            'town_name' => 'Hermopolis',
            'population' => '20000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'copper' => 'copper', 
            'gold' => 'gold', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus', 
            'glass' => 'glass', 
			'xcoord' => '2105',
            'ycoord' => '2209',
            'region' => '16',
            'province' => '67'
        ]); 
        //294
		DB::table('towns')->insert([
            'town_name' => 'Lycopolis',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2127',
            'ycoord' => '2258',
            'region' => '16',
            'province' => '67'
        ]); 
        //Aegyptus Thebais
        //295
		DB::table('towns')->insert([
            'town_name' => 'Ptolemais',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'fiber' => 'flax', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus', 
			'xcoord' => '2154',
            'ycoord' => '2295',
            'region' => '16',
            'province' => '68'
        ]); 
        //296
		DB::table('towns')->insert([
            'town_name' => 'Thebae',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus', 
            'sculpture' => 'ivory',
            'glass' => 'glass', 
            'spice' => 'spice', 
			'xcoord' => '2201',
            'ycoord' => '2343',
            'region' => '16',
            'province' => '68'
        ]); 
        //297
		DB::table('towns')->insert([
            'town_name' => 'Syene',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'pig' => 'pig',            
            'poultry' => 'duck',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'dye' => 'madder', 
            'timber' => 'palm', 
            'paper' => 'papyrus',  
            'sculpture' => 'ivory',
            'spice' => 'spice', 
            'chattel' => 'slave', 
			'xcoord' => '2212',
            'ycoord' => '2433',
            'region' => '16',
            'province' => '68'
        ]); 
        //298
		DB::table('towns')->insert([
            'town_name' => 'Dakhla',
            'population' => '2000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory',
			'xcoord' => '2015',
            'ycoord' => '2354',
            'region' => '16',
            'province' => '68'
        ]); 
        //299
		DB::table('towns')->insert([
            'town_name' => 'Kharga',
            'population' => '2000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm', 
            'sculpture' => 'ivory',
			'xcoord' => '2095',
            'ycoord' => '2357',
            'region' => '16',
            'province' => '68'
        ]); 
        //300
		DB::table('towns')->insert([
            'town_name' => 'Berenice',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'gold' => 'gold',
            'timber' => 'palm', 
            'sculpture' => 'ivory',
            'spice' => 'spice',
			'xcoord' => '2344',
            'ycoord' => '2439',
            'region' => '16',
            'province' => '68'
        ]); 
        //301
		DB::table('towns')->insert([
            'town_name' => 'Philotera',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'gold' => 'gold',
            'timber' => 'palm', 
            'sculpture' => 'ivory',
            'spice' => 'spice',
			'xcoord' => '2265',
            'ycoord' => '2284',
            'region' => '16',
            'province' => '68'
        ]); 
        //Cyprus
        //Cyprus
        //302
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
        //303
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
		//304
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
		//305
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
		//306
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
		//307
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
		//308
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
		//309
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
		//310
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
		//311
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
		//312
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
		//313
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
		//314
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
		//315
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
		//316
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
		//317
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
		//318
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
		//319
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
		//320
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
		//321
		DB::table('towns')->insert([
            'town_name' => 'Lamia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives', 
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1686',
            'ycoord' => '1551',
            'region' => '22',
            'province' => '81'
        ]);
        //aetolia
		//322
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
		//323
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
		//324
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
		//325
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
		//326
		DB::table('towns')->insert([
            'town_name' => 'Pharsalus',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'juniper', 
			'xcoord' => '1680',
            'ycoord' => '1523',
            'region' => '22',
            'province' => '85'
        ]);
        //macedonia
        //epirus
		//327
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
		//328
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
        //329
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
		//330
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
		//331
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
		//332
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
		//333
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
		//334
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
		//335
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
		//336
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
		//337
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
		//338
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
		//339
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
		//340
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
		//341
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
		//342
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
		//343
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
		//344
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
		//345
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
		//346
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
		//347
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
		//348
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
		//349
		DB::table('towns')->insert([
            'town_name' => 'Salonia',
            'population' => '20000',
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
		//350
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
		//351
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
		//352
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
		//353
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
		//354
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
		//355
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
        //356
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
		//357
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
		//358
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
		//359
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
		//360
		DB::table('towns')->insert([
            'town_name' => 'Savaria',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'rye',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech', 
			'xcoord' => '1413',
            'ycoord' => '964',
            'region' => '25',
            'province' => '99'
        ]); 
        //Pannonia Secunda
		//361
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
		//362
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
		//363
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
		//364
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
		//365
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
		//366
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
		//367
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
		//368
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
		//369
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
		//370
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
		//371
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
		//372
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
		//373
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
		//374
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
		//375
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
		//376
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
		//377
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
		//378
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
		//379
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
		//380
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
		//381
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
		//382
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
		//383
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
		//384
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
		//385
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
		//386
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
		//387
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
		//388
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
		//389
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
        //Bosporus
        //Bosporus
		//390
		DB::table('towns')->insert([
            'town_name' => 'Chersonesus',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'juniper', 
			'xcoord' => '2243',
            'ycoord' => '1161',
            'region' => '27',
            'province' => '107'
        ]);
        //391
		DB::table('towns')->insert([
            'town_name' => 'Theodosia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold',
            'timber' => 'juniper',
			'xcoord' => '2340',
            'ycoord' => '1129',
            'region' => '27',
            'province' => '107'
        ]);
        //392
		DB::table('towns')->insert([
            'town_name' => 'Panticapaeum',
            'pack' => 'horse',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'timber' => 'beech',
			'xcoord' => '2394',
            'ycoord' => '1109',
            'region' => '27',
            'province' => '107'
        ]);  
        //Sarmatia
        //Sarmatia
		//393
		DB::table('towns')->insert([
            'town_name' => 'Tyras',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '2083',
            'ycoord' => '1047',
            'region' => '28',
            'province' => '108'
        ]);
		//394
		DB::table('towns')->insert([
            'town_name' => 'Histria',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '2105',
            'ycoord' => '1026',
            'region' => '28',
            'province' => '108'
        ]);
		//395
		DB::table('towns')->insert([
            'town_name' => 'Olbia',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '2161',
            'ycoord' => '1011',
            'region' => '28',
            'province' => '108'
        ]);
        //Scythia
        //Scythia
        //396
		DB::table('towns')->insert([
            'town_name' => 'Tanais',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'salt' => 'salt',
            'pottery' => 'clay',
            'timber' => 'beech',
			'xcoord' => '2537',
            'ycoord' => '982',
            'region' => '29',
            'province' => '109'
        ]);
        //chios
        //chios
        //397
		DB::table('towns')->insert([
            'town_name' => 'Chios',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'juniper',
            'scent' => 'incense',
			'xcoord' => '1870',
            'ycoord' => '1585',
            'region' => '30',
            'province' => '110'
        ]);  
        //Asia
        //Ionia  
        //398
		DB::table('towns')->insert([
            'town_name' => 'Smyrna',
            'population' => '20000',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1920',
            'ycoord' => '1580',
            'region' => '31',
            'province' => '111'
        ]); 
        //399
		DB::table('towns')->insert([
            'town_name' => 'Ephesus',
            'population' => '50000',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1927',
            'ycoord' => '1615',
            'region' => '31',
            'province' => '111'
        ]); 
        //caria
		//400
		DB::table('towns')->insert([
            'town_name' => 'Tralles',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1957',
            'ycoord' => '1619',
            'region' => '31',
            'province' => '112'
        ]);
		//401
		DB::table('towns')->insert([
            'town_name' => 'Miletus',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1952',
            'ycoord' => '1651',
            'region' => '31',
            'province' => '112'
        ]);
		//402
		DB::table('towns')->insert([
            'town_name' => 'Aphrodisias',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
            'sculpture' => 'marble',
			'xcoord' => '1989',
            'ycoord' => '1631',
            'region' => '31',
            'province' => '112'
        ]);
		//403
		DB::table('towns')->insert([
            'town_name' => 'Laodicea Lycum',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2013',
            'ycoord' => '1622',
            'region' => '31',
            'province' => '112'
        ]);
		//404
		DB::table('towns')->insert([
            'town_name' => 'Halicarnassus',
            'pack' => 'horse',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '1935',
            'ycoord' => '1670',
            'region' => '31',
            'province' => '112'
        ]);
        //Lydia
        //405
		DB::table('towns')->insert([
            'town_name' => 'Sardes',
            'population' => '50000',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1973',
            'ycoord' => '1576',
            'region' => '31',
            'province' => '113'
        ]);
        //406
		DB::table('towns')->insert([
            'town_name' => 'Magnesia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '1936',
            'ycoord' => '1566',
            'region' => '31',
            'province' => '113'
        ]);  
		//407
		DB::table('towns')->insert([
            'town_name' => 'Thyatira',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'juniper',
			'xcoord' => '1957',
            'ycoord' => '1544',
            'region' => '31',
            'province' => '113'
        ]);
        //Aeolia
        //408
		DB::table('towns')->insert([
            'town_name' => 'Pergamum',
            'population' => '50000',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'juniper',
            'sculpture' => 'marble',
			'xcoord' => '1923',
            'ycoord' => '1534',
            'region' => '31',
            'province' => '114'
        ]);  
		//409
		DB::table('towns')->insert([
            'town_name' => 'Troas',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'juniper',
			'xcoord' => '1884',
            'ycoord' => '1468',
            'region' => '31',
            'province' => '114'
        ]);
        //Lycia
        //410
		DB::table('towns')->insert([
            'town_name' => 'Xanthus',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '2031',
            'ycoord' => '1709',
            'region' => '31',
            'province' => '115'
        ]); 
        //Pamphylia
        //411
		DB::table('towns')->insert([
            'town_name' => 'Attalia',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives', 
            'timber' => 'cypress', 
			'xcoord' => '2100',
            'ycoord' => '1679',
            'region' => '31',
            'province' => '116'
        ]);  
		//412
		DB::table('towns')->insert([
            'town_name' => 'Side',
            'wool' => 'sheep',
            'pig' => 'pig',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'timber' => 'cypress',  
            'chattel' => 'slave',
			'xcoord' => '2139',
            'ycoord' => '1687',
            'region' => '31',
            'province' => '116'
        ]);
        //Mysia
        //413
		DB::table('towns')->insert([
            'town_name' => 'Cyzicus',
            'population' => '20000',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'timber' => 'oak', 
            'sculpture' => 'marble', 
			'xcoord' => '1962',
            'ycoord' => '1453',
            'region' => '31',
            'province' => '117'
        ]); 
        //Bithynia
        //414
		DB::table('towns')->insert([
            'town_name' => 'Nicaea',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
            'sculpture' => 'marble', 
			'xcoord' => '2052',
            'ycoord' => '1447',
            'region' => '31',
            'province' => '118'
        ]);  
        //415
		DB::table('towns')->insert([
            'town_name' => 'Nicomedia',
            'population' => '20000',
            'pack' => 'horse',
            'pig' => 'pig',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'oak', 
			'xcoord' => '2062',
            'ycoord' => '1428',
            'region' => '31',
            'province' => '118'
        ]);  
        //416
		DB::table('towns')->insert([
            'town_name' => 'Heraclea Pontica',
            'climate' => 'pontic',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '2137',
            'ycoord' => '1392',
            'region' => '31',
            'province' => '118'
        ]);  
        //417
		DB::table('towns')->insert([
            'town_name' => 'Agrilium',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '2090',
            'ycoord' => '1424',
            'region' => '31',
            'province' => '118'
        ]);  
        //418
		DB::table('towns')->insert([
            'town_name' => 'Prusias',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak', 
			'xcoord' => '2129',
            'ycoord' => '1421',
            'region' => '31',
            'province' => '118'
        ]); 
        //Paphlagonia
        //419
		DB::table('towns')->insert([
            'town_name' => 'Sesamus',
            'climate' => 'pontic',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '2187',
            'ycoord' => '1361',
            'region' => '31',
            'province' => '119'
        ]);  
        //420
		DB::table('towns')->insert([
            'town_name' => 'Sinope',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'oak', 
			'xcoord' => '2325',
            'ycoord' => '1342',
            'region' => '31',
            'province' => '119'
        ]);  
        //421
		DB::table('towns')->insert([
            'town_name' => 'Timonium',
            'climate' => 'continental',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'pine', 
			'xcoord' => '2257',
            'ycoord' => '1384',
            'region' => '31',
            'province' => '119'
        ]); 
        //422
		DB::table('towns')->insert([
            'town_name' => 'Germanicopolis',
            'climate' => 'continental',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'pine', 
			'xcoord' => '2248',
            'ycoord' => '1435',
            'region' => '31',
            'province' => '119'
        ]); 
        //423
		DB::table('towns')->insert([
            'town_name' => 'Hadrianapolis',
            'climate' => 'pontic',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'iron' => 'iron', 
            'timber' => 'oak', 
            'sculpture' => 'marble', 
			'xcoord' => '2201',
            'ycoord' => '1395',
            'region' => '31',
            'province' => '119'
        ]); 
        //Pisidia
        //424
		DB::table('towns')->insert([
            'town_name' => 'Apamea',
            'climate' => 'continental',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '2088',
            'ycoord' => '1603',
            'region' => '31',
            'province' => '120'
        ]); 
        //425
		DB::table('towns')->insert([
            'town_name' => 'Baris',
            'climate' => 'continental',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay', 
            'timber' => 'juniper', 
			'xcoord' => '2096',
            'ycoord' => '1624',
            'region' => '31',
            'province' => '120'
        ]);   
        //Isauria
        //426
		DB::table('towns')->insert([
            'town_name' => 'Isaura',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'timber' => 'cypress', 
			'xcoord' => '2161',
            'ycoord' => '1644',
            'region' => '31',
            'province' => '121'
        ]); 
        //Phrygia Pacatania
        //427
		DB::table('towns')->insert([
            'town_name' => 'Synnada',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'pottery' => 'clay', 
            'timber' => 'juniper',
			'xcoord' => '2094',
            'ycoord' => '1562',
            'region' => '31',
            'province' => '122'
        ]); 
        //428
		DB::table('towns')->insert([
            'town_name' => 'Ousakeium',
            'wool' => 'sheep',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'einkorn',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'pottery' => 'clay', 
            'timber' => 'juniper',
			'xcoord' => '2026',
            'ycoord' => '1561',
            'region' => '31',
            'province' => '122'
        ]);  
        //Phrygia Salutaris
        //429
		DB::table('towns')->insert([
            'town_name' => 'Dorylaeum',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
            'sculpture' => 'marble',
			'xcoord' => '2091',
            'ycoord' => '1499',
            'region' => '31',
            'province' => '123'
        ]); 
        //430
		DB::table('towns')->insert([
            'town_name' => 'Gordium',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'pottery' => 'clay', 
            'timber' => 'juniper',
			'xcoord' => '2172',
            'ycoord' => '1506',
            'region' => '31',
            'province' => '123'
        ]);  
        //Phrygia Maior
        //431
		DB::table('towns')->insert([
            'town_name' => 'Cotyaeum',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
            'sculpture' => 'marble',
			'xcoord' => '2067',
            'ycoord' => '1510',
            'region' => '31',
            'province' => '124'
        ]); 
        //Phrygia Minor
        //432
		DB::table('towns')->insert([
            'town_name' => 'Prusa',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'oak',
            'sculpture' => 'marble',
			'xcoord' => '2020',
            'ycoord' => '1467',
            'region' => '31',
            'province' => '125'
        ]); 
        //433
		DB::table('towns')->insert([
            'town_name' => 'Dascylium',
            'pack' => 'horse',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'boar',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'oak',
            'sculpture' => 'marble',
			'xcoord' => '1992',
            'ycoord' => '1477',
            'region' => '31',
            'province' => '125'
        ]);   
        //Lycaonia
        //434
		DB::table('towns')->insert([
            'town_name' => 'Iconium',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'juniper',
			'xcoord' => '2193',
            'ycoord' => '1616',
            'region' => '31',
            'province' => '126'
        ]); 
        //435
		DB::table('towns')->insert([
            'town_name' => 'Laranda',          
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'sweetener' => 'olives',
            'timber' => 'cypress', 
			'xcoord' => '2224',
            'ycoord' => '1649',
            'region' => '31',
            'province' => '126'
        ]);   
        //Pontus Honorias
        //436
		DB::table('towns')->insert([
            'town_name' => 'Amisus',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'pine',
			'xcoord' => '2386',
            'ycoord' => '1389',
            'region' => '31',
            'province' => '127'
        ]); 
        //437
		DB::table('towns')->insert([
            'town_name' => 'Amasea',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'pine',
			'xcoord' => '2362',
            'ycoord' => '1431',
            'region' => '31',
            'province' => '127'
        ]);  
        //Pontus Polemoniacus
        //438
		DB::table('towns')->insert([
            'town_name' => 'Polemonium',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'pine',
			'xcoord' => '2446',
            'ycoord' => '1408',
            'region' => '31',
            'province' => '128'
        ]);  
        //439
		DB::table('towns')->insert([
            'town_name' => 'Cerasus',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'pine',
			'xcoord' => '2492',
            'ycoord' => '1416',
            'region' => '31',
            'province' => '128'
        ]); 
        //Pontus Chaldia
        //440
		DB::table('towns')->insert([
            'town_name' => 'Trapezus',
            'population' => '20000',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'pine',
			'xcoord' => '2554',
            'ycoord' => '1411',
            'region' => '31',
            'province' => '129'
        ]); 
        //441
		DB::table('towns')->insert([
            'town_name' => 'Rhizus',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'pine',
			'xcoord' => '2599',
            'ycoord' => '1409',
            'region' => '31',
            'province' => '129'
        ]); 
        //Gallatia Prima
        //442
		DB::table('towns')->insert([
            'town_name' => 'Tavium',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'tin' => 'tin',
            'iron' => 'iron',
            'timber' => 'juniper',
			'xcoord' => '2311',
            'ycoord' => '1467',
            'region' => '31',
            'province' => '130'
        ]);  
        //443
		DB::table('towns')->insert([
            'town_name' => 'Ancyra',
            'population' => '20000',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '2213',
            'ycoord' => '1474',
            'region' => '31',
            'province' => '130'
        ]);
        //Galatia Salutaris
        //444
		DB::table('towns')->insert([
            'town_name' => 'Pessinus',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
			'xcoord' => '2153',
            'ycoord' => '1528',
            'region' => '31',
            'province' => '131'
        ]);  
        //445
		DB::table('towns')->insert([
            'town_name' => 'Amorium',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
			'xcoord' => '2130',
            'ycoord' => '1570',
            'region' => '31',
            'province' => '131'
        ]);
        //Cappadocia Prima
        //446
		DB::table('towns')->insert([
            'town_name' => 'Mazaca',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2344',
            'ycoord' => '1560',
            'region' => '31',
            'province' => '132'
        ]); 
        //447
		DB::table('towns')->insert([
            'town_name' => 'Nyssa',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2307',
            'ycoord' => '1569',
            'region' => '31',
            'province' => '132'
        ]);  
        //Cappadocia Secunda
        //448
		DB::table('towns')->insert([
            'town_name' => 'Tyana',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2305',
            'ycoord' => '1609',
            'region' => '31',
            'province' => '133'
        ]);  
        //Cappadocia Chamanene
        //449
		DB::table('towns')->insert([
            'town_name' => 'Garsaura',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'salt' => 'salt',
            'timber' => 'juniper',
			'xcoord' => '2273',
            'ycoord' => '1584',
            'region' => '31',
            'province' => '134'
        ]);  
        //450
		DB::table('towns')->insert([
            'town_name' => 'Doara',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2301',
            'ycoord' => '1545',
            'region' => '31',
            'province' => '134'
        ]); 
        //Cappadocia Cataonia
        //451
		DB::table('towns')->insert([
            'town_name' => 'Comana',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2414',
            'ycoord' => '1591',
            'region' => '31',
            'province' => '135'
        ]);  
        //Cappadocia Melitene
        //452
		DB::table('towns')->insert([
            'town_name' => 'Melitene',
            'population' => '20000',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '2490',
            'ycoord' => '1586',
            'region' => '31',
            'province' => '136'
        ]);  
        //Cilicia Trachea
        //453
		DB::table('towns')->insert([
            'town_name' => 'Coracesium',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '2169',
            'ycoord' => '1701',
            'region' => '31',
            'province' => '137'
        ]);  
        //454
		DB::table('towns')->insert([
            'town_name' => 'Anemurium',
            'pack' => 'horse',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'timber' => 'cypress',
			'xcoord' => '2213',
            'ycoord' => '1729',
            'region' => '31',
            'province' => '137'
        ]);  
        //Cilicia Aspera
        //455
		DB::table('towns')->insert([
            'town_name' => 'Ourbanopolis',
            'cattle' => 'cattle',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
            'glass' => 'glass',
			'xcoord' => '2263',
            'ycoord' => '1715',
            'region' => '31',
            'province' => '138'
        ]);  
        //Cilicia Pedias
        //456
		DB::table('towns')->insert([
            'town_name' => 'Caesarea Germanicia',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'timber' => 'cypress',
			'xcoord' => '2419',
            'ycoord' => '1636',
            'region' => '31',
            'province' => '139'
        ]); 
        //457
		DB::table('towns')->insert([
            'town_name' => 'Tarsus',
            'pack' => 'horse',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2319',
            'ycoord' => '1675',
            'region' => '31',
            'province' => '139'
        ]);  
        //458
		DB::table('towns')->insert([
            'town_name' => 'Adana',
            'pack' => 'horse',
            'pig' => 'pig',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'silver' => 'silver',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2338',
            'ycoord' => '1673',
            'region' => '31',
            'province' => '139'
        ]); 
        //459
		DB::table('towns')->insert([
            'town_name' => 'Zephyrium',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2307',
            'ycoord' => '1683',
            'region' => '31',
            'province' => '139'
        ]); 
        //Armenia
        //Armenia Minor
        //460
		DB::table('towns')->insert([
            'town_name' => 'Sebasteia',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'timber' => 'juniper',
			'xcoord' => '2424',
            'ycoord' => '1497',
            'region' => '32',
            'province' => '140'
        ]);  
        //461
		DB::table('towns')->insert([
            'town_name' => 'Nicopolis',
            'climate' => 'continental',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'juniper',
			'xcoord' => '2474',
            'ycoord' => '1464',
            'region' => '32',
            'province' => '140'
        ]); 
        //Armenia Maior
        //462
		DB::table('towns')->insert([
            'town_name' => 'Her',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'salt' => 'salt',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2822',
            'ycoord' => '1570',
            'region' => '32',
            'province' => '141'
        ]); 
        //463
		DB::table('towns')->insert([
            'town_name' => 'Thospia',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2741',
            'ycoord' => '1575',
            'region' => '32',
            'province' => '141'
        ]);
        //464
		DB::table('towns')->insert([
            'town_name' => 'Bitlis',
            'population' => '5000',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2679',
            'ycoord' => '1581',
            'region' => '32',
            'province' => '141'
        ]);
        //Armenia Superior
        //465
		DB::table('towns')->insert([
            'town_name' => 'Ardahan',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '2727',
            'ycoord' => '1411',
            'region' => '32',
            'province' => '142'
        ]);  
        //Armenia Ararat
        //466
		DB::table('towns')->insert([
            'town_name' => 'Armavir',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2777',
            'ycoord' => '1466',
            'region' => '32',
            'province' => '143'
        ]); 
        //467
		DB::table('towns')->insert([
            'town_name' => 'Artaxata',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'iron' => 'iron',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2802',
            'ycoord' => '1479',
            'region' => '32',
            'province' => '143'
        ]); 
        //468
		DB::table('towns')->insert([
            'town_name' => 'Naxuana',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2845',
            'ycoord' => '1530',
            'region' => '32',
            'province' => '143'
        ]); 
        //Armenia Tertia
        //469
		DB::table('towns')->insert([
            'town_name' => 'Manzikert',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2705',
            'ycoord' => '1537',
            'region' => '32',
            'province' => '144'
        ]); 
        //470
		DB::table('towns')->insert([
            'town_name' => 'Karin',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2638',
            'ycoord' => '1486',
            'region' => '32',
            'province' => '144'
        ]); 
        //Arzanene
        //471
		DB::table('towns')->insert([
            'town_name' => 'Amida',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2584',
            'ycoord' => '1610',
            'region' => '32',
            'province' => '145'
        ]); 
        //472
		DB::table('towns')->insert([
            'town_name' => 'Tigranocerta',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2631',
            'ycoord' => '1593',
            'region' => '32',
            'province' => '145'
        ]); 
        //Acilisene
        //473
		DB::table('towns')->insert([
            'town_name' => 'Acilisene',
            'climate' => 'continental',
            'cattle' => 'cattle',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'silver' => 'silver',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2548',
            'ycoord' => '1492',
            'region' => '32',
            'province' => '146'
        ]); 
        //474
		DB::table('towns')->insert([
            'town_name' => 'Satala',
            'population' => '5000',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2554',
            'ycoord' => '1468',
            'region' => '32',
            'province' => '146'
        ]);
        //475
		DB::table('towns')->insert([
            'town_name' => 'Baiburt',
            'population' => '5000',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2584',
            'ycoord' => '1460',
            'region' => '32',
            'province' => '146'
        ]);
        //Corduene
        //476
		DB::table('towns')->insert([
            'town_name' => 'Sareisa',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2697',
            'ycoord' => '1633',
            'region' => '32',
            'province' => '147'
        ]); 
        //Lazica
        //477
		DB::table('towns')->insert([
            'town_name' => 'Pityus',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold',
            'fiber' => 'flax',
            'timber' => 'pine',
			'xcoord' => '2567',
            'ycoord' => '1245',
            'region' => '32',
            'province' => '148'
        ]); 
        //478
		DB::table('towns')->insert([
            'town_name' => 'Dioscurias',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'gold' => 'gold',
            'fiber' => 'flax',
            'timber' => 'pine',
			'xcoord' => '2627',
            'ycoord' => '1280',
            'region' => '32',
            'province' => '148'
        ]); 
        //Colchis
        //479
		DB::table('towns')->insert([
            'town_name' => 'Phasis',
            'climate' => 'pontic',
            'wool' => 'sheep',
            'fish' => 'fish',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'fiber' => 'flax',
            'timber' => 'pine',
			'xcoord' => '2651',
            'ycoord' => '1314',
            'region' => '32',
            'province' => '149'
        ]); 
        //Iberia
        //480
		DB::table('towns')->insert([
            'town_name' => 'Armazi',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'sweetener' => 'honey',
            'gold' => 'gold',
            'silver' => 'silver',
            'fiber' => 'flax',
            'timber' => 'pine',
			'xcoord' => '2817',
            'ycoord' => '1362',
            'region' => '32',
            'province' => '150'
        ]); 
        //Albania
        //481
		DB::table('towns')->insert([
            'town_name' => 'Gardman',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'copper' => 'copper',
            'dye' => 'woad',
            'timber' => 'pine',
			'xcoord' => '2896',
            'ycoord' => '1436',
            'region' => '32',
            'province' => '151'
        ]); 
        //482
		DB::table('towns')->insert([
            'town_name' => 'Gabala',
            'climate' => 'cold steppe',
            'wool' => 'sheep',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'tin' => 'tin',
            'timber' => 'pine',
			'xcoord' => '2969',
            'ycoord' => '1412',
            'region' => '32',
            'province' => '151'
        ]); 
        //Persia
        //Media Atropatene
        //483
		DB::table('towns')->insert([
            'town_name' => 'Ardabil',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2993',
            'ycoord' => '1590',
            'region' => '33',
            'province' => '152'
        ]); 
        //484
		DB::table('towns')->insert([
            'town_name' => 'Tauris',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2892',
            'ycoord' => '1599',
            'region' => '33',
            'province' => '152'
        ]); 
        //485
		DB::table('towns')->insert([
            'town_name' => 'Gilzan',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2829',
            'ycoord' => '1634',
            'region' => '33',
            'province' => '152'
        ]); 
        //486
		DB::table('towns')->insert([
            'town_name' => 'Ganzak',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'iron' => 'iron',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2882',
            'ycoord' => '1672',
            'region' => '33',
            'province' => '152'
        ]); 
        //Media Minor
        //487
		DB::table('towns')->insert([
            'town_name' => 'Ecbatana',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'pig' => 'pig',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'iron' => 'iron',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3004',
            'ycoord' => '1806',            
            'region' => '33',
            'province' => '153'
        ]); 
        //Hyrcania
        //488
		DB::table('towns')->insert([
            'town_name' => 'Amol',
            'wool' => 'sheep',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',      
            'timber' => 'oak',
            'fabric' => 'silk',
			'xcoord' => '3198',
            'ycoord' => '1703',
            'region' => '33',
            'province' => '154'
        ]); 
        //489
		DB::table('towns')->insert([
            'town_name' => 'Gorgan',
            'wool' => 'sheep',
            'game' => 'pheasant',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'pottery' => 'clay',      
            'timber' => 'oak',
            'fabric' => 'silk',
			'xcoord' => '3303',
            'ycoord' => '1680',
            'region' => '33',
            'province' => '154'
        ]); 
        //Arsacia
        //490
		DB::table('towns')->insert([
            'town_name' => 'Karaj',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
			'xcoord' => '3127',
            'ycoord' => '1742',
            'timber' => 'palm',
            'fabric' => 'silk',
            'region' => '33',
            'province' => '155'
        ]); 
        //491
		DB::table('towns')->insert([
            'town_name' => 'Rhages',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
			'xcoord' => '3150',
            'ycoord' => '1754',
            'timber' => 'palm',
            'fabric' => 'silk',
            'region' => '33',
            'province' => '155'
        ]); 
        //492
		DB::table('towns')->insert([
            'town_name' => 'Varena',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
			'xcoord' => '3160',
            'ycoord' => '1772',
            'timber' => 'palm',
            'fabric' => 'silk',
            'region' => '33',
            'province' => '155'
        ]); 
        //493
		DB::table('towns')->insert([
            'town_name' => 'Ghom',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
			'xcoord' => '3123',
            'ycoord' => '1816',
            'timber' => 'palm',
            'fabric' => 'silk',
            'region' => '33',
            'province' => '155'
        ]); 
        //494
		DB::table('towns')->insert([
            'town_name' => 'Sialk',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
			'xcoord' => '3151',
            'ycoord' => '1854',
            'timber' => 'palm',
            'fabric' => 'silk',
            'region' => '33',
            'province' => '155'
        ]); 
        //Susiana
        //495
		DB::table('towns')->insert([
            'town_name' => 'Susa',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'iron' => 'iron',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '2998',
            'ycoord' => '1955',
            'region' => '33',
            'province' => '156'
        ]); 
        //496
		DB::table('towns')->insert([
            'town_name' => 'Taryana',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'pottery' => 'clay',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3012',
            'ycoord' => '2016',
            'region' => '33',
            'province' => '156'
        ]); 
        //497
		DB::table('towns')->insert([
            'town_name' => 'Tabae',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3162',
            'ycoord' => '1938',
            'region' => '33',
            'province' => '156'
        ]); 
        //Persia
        //498
		DB::table('towns')->insert([
            'town_name' => 'Issatis',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3299',
            'ycoord' => '1982',
            'region' => '33',
            'province' => '157'
        ]); 
        //499
		DB::table('towns')->insert([
            'town_name' => 'Sedeh',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3243',
            'ycoord' => '2029',
            'region' => '33',
            'province' => '157'
        ]); 
        //500
		DB::table('towns')->insert([
            'town_name' => 'Yasuj',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3215',
            'ycoord' => '2044',
            'region' => '33',
            'province' => '157'
        ]); 
        //501
		DB::table('towns')->insert([
            'town_name' => 'Pasargadae',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3316',
            'ycoord' => '2073',
            'region' => '33',
            'province' => '157'
        ]); 
        //502
		DB::table('towns')->insert([
            'town_name' => 'Persepolis',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'tin' => 'tin',
            'iron' => 'iron',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3267',
            'ycoord' => '2108',
            'region' => '33',
            'province' => '157'
        ]); 
        //503
		DB::table('towns')->insert([
            'town_name' => 'Darab',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3347',
            'ycoord' => '2150',
            'region' => '33',
            'province' => '157'
        ]); 
        //Parthia
        //504
		DB::table('towns')->insert([
            'town_name' => 'Komesh',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3250',
            'ycoord' => '1758',
            'region' => '33',
            'province' => '158'
        ]);
        //505
		DB::table('towns')->insert([
            'town_name' => 'Hecatompylos',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3290',
            'ycoord' => '1746',
            'region' => '33',
            'province' => '158'
        ]);
        //Margiana
        //506
		DB::table('towns')->insert([
            'town_name' => 'Nishapur',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3523',
            'ycoord' => '1718',
            'region' => '33',
            'province' => '159'
        ]);  
        //507
		DB::table('towns')->insert([
            'town_name' => 'Patigrabana',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3559',
            'ycoord' => '1710',
            'region' => '33',
            'province' => '159'
        ]);   
        //508
		DB::table('towns')->insert([
            'town_name' => 'Merv',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3680',
            'ycoord' => '1631',
            'region' => '33',
            'province' => '159'
        ]); 
        //509
		DB::table('towns')->insert([
            'town_name' => 'Konjikala',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3502',
            'ycoord' => '1610',
            'region' => '33',
            'province' => '159'
        ]);   
        //510
		DB::table('towns')->insert([
            'town_name' => 'Zibad',
            'population' => '5000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'pottery' => 'clay',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3519',
            'ycoord' => '1834',
            'region' => '33',
            'province' => '159'
        ]);    
        //Carmania
        //511
		DB::table('towns')->insert([
            'town_name' => 'Karaman',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'tin' => 'tin',
            'iron' => 'iron',
            'gold' => 'gold',
            'silver' => 'silver',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3435',
            'ycoord' => '2079',
            'region' => '33',
            'province' => '160'
        ]);  
        //512
		DB::table('towns')->insert([
            'town_name' => 'Bam',
            'population' => '5000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'poultry' => 'chicken',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'tin' => 'tin',
            'iron' => 'iron',
            'gold' => 'gold',
            'silver' => 'silver',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3629',
            'ycoord' => '2124',
            'region' => '33',
            'province' => '160'
        ]);
        //Chorasmia
        //513
		DB::table('towns')->insert([
            'town_name' => 'Urgench',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3616',
            'ycoord' => '1373',
            'region' => '33',
            'province' => '161'
        ]);
        //Bactriana
        //514
		DB::table('towns')->insert([
            'town_name' => 'Bactra',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'pottery' => 'clay',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3953',
            'ycoord' => '1656',
            'region' => '33',
            'province' => '162'
        ]);
        //Sogdiana
        //515
		DB::table('towns')->insert([
            'town_name' => 'Maracanda',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'copper' => 'copper',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3941',
            'ycoord' => '1501',
            'region' => '33',
            'province' => '163'
        ]);
        //516
		DB::table('towns')->insert([
            'town_name' => 'Bukhara',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'gold' => 'gold',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3809',
            'ycoord' => '1490',
            'region' => '33',
            'province' => '163'
        ]);
        //517
		DB::table('towns')->insert([
            'town_name' => 'Kesh',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3932',
            'ycoord' => '1536',
            'region' => '33',
            'province' => '163'
        ]);
        //Drangiana 
        //518
		DB::table('towns')->insert([
            'town_name' => 'Phrada',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'fabric' => 'silk',
			'xcoord' => '3940',
            'ycoord' => '2086',
            'region' => '33',
            'province' => '164'
        ]);   
        //Aria 
        //519
		DB::table('towns')->insert([
            'town_name' => 'Areia',
            'climate' => 'cold steppe',
            'pack' => 'horse',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
            'fabric' => 'silk',
			'xcoord' => '3947',
            'ycoord' => '1959',
            'region' => '33',
            'province' => '165'
        ]);  
        //Gedrosia 
        //520
		DB::table('towns')->insert([
            'town_name' => 'Pura',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'elephant',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'fabric' => 'silk',
			'xcoord' => '3699',
            'ycoord' => '2248',
            'region' => '33',
            'province' => '166'
        ]); 
        //Mesopotamia
        //Characene
        //521
		DB::table('towns')->insert([
            'town_name' => 'Kharba',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2968',
            'ycoord' => '2066',
            'region' => '34',
            'province' => '167'
        ]); 
        //522
		DB::table('towns')->insert([
            'town_name' => 'Charax',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2949',
            'ycoord' => '2037',
            'region' => '34',
            'province' => '167'
        ]); 
        //Babylonia
        //523
		DB::table('towns')->insert([
            'town_name' => 'Uruk',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2840',
            'ycoord' => '2019',
            'region' => '34',
            'province' => '168'
        ]); 
        //524
		DB::table('towns')->insert([
            'town_name' => 'Nippur',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2821',
            'ycoord' => '1978',
            'region' => '34',
            'province' => '168'
        ]); 
        //525
		DB::table('towns')->insert([
            'town_name' => 'Apameia',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2868',
            'ycoord' => '1946',
            'region' => '34',
            'province' => '168'
        ]); 
        //526
		DB::table('towns')->insert([
            'town_name' => 'Seleucia',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'copper' => 'copper',
            'iron' => 'iron',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2805',
            'ycoord' => '1910',
            'region' => '34',
            'province' => '168'
        ]); 
        //Assyria
        //527
		DB::table('towns')->insert([
            'town_name' => 'Samarra',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2770',
            'ycoord' => '1845',
            'region' => '34',
            'province' => '169'
        ]); 
        //528
		DB::table('towns')->insert([
            'town_name' => 'Birtha',
            'population' => '5000',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2758',
            'ycoord' => '1819',
            'region' => '34',
            'province' => '169'
        ]); 
        //529
		DB::table('towns')->insert([
            'town_name' => 'Assur',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2743',
            'ycoord' => '1774',
            'region' => '34',
            'province' => '169'
        ]); 
        //530
		DB::table('towns')->insert([
            'town_name' => 'Nineveh',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'copper' => 'copper', 
            'iron' => 'iron', 
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2733',
            'ycoord' => '1713',
            'region' => '34',
            'province' => '169'
        ]); 
        //531
		DB::table('towns')->insert([
            'town_name' => 'Naarda',
            'climate' => 'hot steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'pottery' => 'clay',   
            'dye' => 'woad',           
            'timber' => 'palm',
			'xcoord' => '2724',
            'ycoord' => '1678',
            'region' => '34',
            'province' => '169'
        ]); 
        //Osrhoene
        //532
		DB::table('towns')->insert([
            'town_name' => 'Anah',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2674',
            'ycoord' => '1841',
            'region' => '34',
            'province' => '170'
        ]); 
        //533
		DB::table('towns')->insert([
            'town_name' => 'Dura Europos',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2619',
            'ycoord' => '1828',
            'region' => '34',
            'province' => '170'
        ]); 
        //534
		DB::table('towns')->insert([
            'town_name' => 'Circesium',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2596',
            'ycoord' => '1793',
            'region' => '34',
            'province' => '170'
        ]); 
        //535
		DB::table('towns')->insert([
            'town_name' => 'Zor',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2580',
            'ycoord' => '1774',
            'region' => '34',
            'province' => '170'
        ]); 
        //536
		DB::table('towns')->insert([
            'town_name' => 'Callinicum',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2523',
            'ycoord' => '1737',
            'region' => '34',
            'province' => '170'
        ]); 
        //537
		DB::table('towns')->insert([
            'town_name' => 'Carrhae',
            'climate' => 'hot steppe',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'copper' => 'copper',            
            'timber' => 'juniper',
			'xcoord' => '2523',
            'ycoord' => '1691',
            'region' => '34',
            'province' => '170'
        ]); 
        //538
		DB::table('towns')->insert([
            'town_name' => 'Edessa',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'copper' => 'copper',  
            'iron' => 'iron',  
            'pottery' => 'clay',            
            'timber' => 'juniper',
			'xcoord' => '2512',
            'ycoord' => '1662',
            'region' => '34',
            'province' => '170'
        ]); 
        //539
		DB::table('towns')->insert([
            'town_name' => 'Batnae',
            'pack' => 'horse',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',           
            'timber' => 'juniper',
			'xcoord' => '2500',
            'ycoord' => '1674',
            'region' => '34',
            'province' => '170'
        ]); 
        //Adiabene
        //540
		DB::table('towns')->insert([
            'town_name' => 'Arrapha',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'copper' => 'copper',  
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2795',
            'ycoord' => '1779',
            'region' => '34',
            'province' => '171'
        ]); 
        //541
		DB::table('towns')->insert([
            'town_name' => 'Arbela',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'copper' => 'copper',  
            'pottery' => 'clay',            
            'timber' => 'palm',
			'xcoord' => '2776',
            'ycoord' => '1722',
            'region' => '34',
            'province' => '171'
        ]); 
        //Commagene
        //542
		DB::table('towns')->insert([
            'town_name' => 'Samosata',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'copper' => 'copper',
            'iron' => 'iron',
            'pottery' => 'clay',            
            'timber' => 'juniper',
			'xcoord' => '2496',
            'ycoord' => '1634',
            'region' => '34',
            'province' => '172'
        ]); 
        //543
		DB::table('towns')->insert([
            'town_name' => 'Zeugma',
            'population' => '5000',
            'climate' => 'continental',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'pottery' => 'clay',            
            'timber' => 'juniper',
			'xcoord' => '2482',
            'ycoord' => '1669',
            'region' => '34',
            'province' => '172'
        ]); 
        //Sophene
        //544
		DB::table('towns')->insert([
            'town_name' => 'Arsamosata',
            'climate' => 'continental',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'sweetener' => 'honey',
            'copper' => 'copper',
            'pottery' => 'clay',
            'dye' => 'woad',
            'timber' => 'juniper',
			'xcoord' => '2555',
            'ycoord' => '1580',
            'region' => '34',
            'province' => '173'
        ]); 
        //Mesopotamia Prima
        //545
		DB::table('towns')->insert([
            'town_name' => 'Singara',
            'population' => '5000',
            'climate' => 'hot steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'timber' => 'juniper',
			'xcoord' => '2649',
            'ycoord' => '1719',
            'region' => '34',
            'province' => '174'
        ]); 
        //546
		DB::table('towns')->insert([
            'town_name' => 'Nisibis',
            'climate' => 'hot steppe',
            'pack' => 'horse',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'timber' => 'juniper',
			'xcoord' => '2635',
            'ycoord' => '1669',
            'region' => '34',
            'province' => '174'
        ]); 
        //Mesopotamia Secunda
        //547
		DB::table('towns')->insert([
            'town_name' => 'Rhesaina',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2583',
            'ycoord' => '1679',
            'region' => '34',
            'province' => '175'
        ]); 
        //548
		DB::table('towns')->insert([
            'town_name' => 'Qirdahat',
            'climate' => 'desert wetland',
            'pack' => 'camel',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2610',
            'ycoord' => '1703',
            'region' => '34',
            'province' => '175'
        ]);   
        //Syria
        //Syria Euphratensis
        //549
		DB::table('towns')->insert([
            'town_name' => 'Hierapolis',
            'pack' => 'camel',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'palm',
			'xcoord' => '2478',
            'ycoord' => '1700',
            'region' => '35',
            'province' => '176'
        ]); 
        //Syria Tetrapolis
        //550
		DB::table('towns')->insert([
            'town_name' => 'Beroea',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'juniper',
			'xcoord' => '2428',
            'ycoord' => '1722',
            'region' => '35',
            'province' => '177'
        ]); 
        //551
		DB::table('towns')->insert([
            'town_name' => 'Antiochia',
            'population' => '100000',
            'pack' => 'horse',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'juniper',
            'glass' => 'glass',
            'fabric' => 'silk',
			'xcoord' => '2378',
            'ycoord' => '1721',
            'region' => '35',
            'province' => '177'
        ]); 
        //552
		DB::table('towns')->insert([
            'town_name' => 'Laodicea',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'timber' => 'juniper',
			'xcoord' => '2357',
            'ycoord' => '1762',
            'region' => '35',
            'province' => '177'
        ]); 
        //553
		DB::table('towns')->insert([
            'town_name' => 'Epiphaneia',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cedar',
			'xcoord' => '2408',
            'ycoord' => '1787',
            'region' => '35',
            'province' => '177'
        ]); 
        //554
		DB::table('towns')->insert([
            'town_name' => 'Emesa',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cedar',
			'xcoord' => '2406',
            'ycoord' => '1811',
            'region' => '35',
            'province' => '177'
        ]); 
        //Syria Coele
        //555
		DB::table('towns')->insert([
            'town_name' => 'Palmyra',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'glass' => 'glass',
            'spice' => 'spice',
            'fabric' => 'silk',
            'scent' => 'incense',
			'xcoord' => '2485',
            'ycoord' => '1820',
            'region' => '35',
            'province' => '178'
        ]);      
        //556
		DB::table('towns')->insert([
            'town_name' => 'Damascus',
            'population' => '20000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'iron' => 'iron',
            'fiber' => 'flax',
            'timber' => 'palm',
            'glass' => 'glass',
			'xcoord' => '2384',
            'ycoord' => '1890',
            'region' => '35',
            'province' => '178'
        ]); 
        //557
		DB::table('towns')->insert([
            'town_name' => 'Heliopolis',
            'population' => '20000',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'fiber' => 'flax',
            'pottery' => 'clay',
            'timber' => 'cedar',
			'xcoord' => '2379',
            'ycoord' => '1858',
            'region' => '35',
            'province' => '178'
        ]);
        //Phoenicia
        //558
		DB::table('towns')->insert([
            'town_name' => 'Tripolis Phoenicia',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cedar',
			'xcoord' => '2364',
            'ycoord' => '1829',
            'region' => '35',
            'province' => '179'
        ]); 
        //559
		DB::table('towns')->insert([
            'town_name' => 'Laodicea Phoenicia',
            'pack' => 'horse',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cedar',
			'xcoord' => '2343',
            'ycoord' => '1866',
            'region' => '35',
            'province' => '179'
        ]); 
        //560
		DB::table('towns')->insert([
            'town_name' => 'Tyrus',
            'population' => '20000',
            'pack' => 'horse',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cedar',
			'xcoord' => '2328',
            'ycoord' => '1902',
            'region' => '35',
            'province' => '179'
        ]); 
        //561
		DB::table('towns')->insert([
            'town_name' => 'Hepha',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cedar',
            'glass' => 'glass',
			'xcoord' => '2317',
            'ycoord' => '1928',
            'region' => '35',
            'province' => '179'
        ]); 
        //562
		DB::table('towns')->insert([
            'town_name' => 'Sidon',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'dye' => 'indigo',
            'timber' => 'cedar',
            'glass' => 'glass',
			'xcoord' => '2339',
            'ycoord' => '1879',
            'region' => '35',
            'province' => '179'
        ]); 
        //Peraea
        //563
		DB::table('towns')->insert([
            'town_name' => 'Raphana',
            'population' => '5000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
			'xcoord' => '2377',
            'ycoord' => '1929',
            'region' => '35',
            'province' => '180'
        ]); 
        //564
		DB::table('towns')->insert([
            'town_name' => 'Arabella',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2376',
            'ycoord' => '1942',
            'region' => '35',
            'province' => '180'
        ]); 
        //565
		DB::table('towns')->insert([
            'town_name' => 'Pella',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2349',
            'ycoord' => '1947',
            'region' => '35',
            'province' => '180'
        ]); 
        //Judea
        //566
		DB::table('towns')->insert([
            'town_name' => 'Jericho',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
			'xcoord' => '2344',
            'ycoord' => '1983',
            'region' => '35',
            'province' => '181'
        ]); 
        //567
		DB::table('towns')->insert([
            'town_name' => 'Hierosolyma',
            'population' => '20000',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2327',
            'ycoord' => '1993',
            'region' => '35',
            'province' => '181'
        ]); 
        //568
		DB::table('towns')->insert([
            'town_name' => 'Hebron',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2326',
            'ycoord' => '2012',
            'region' => '35',
            'province' => '181'
        ]); 
        //569
		DB::table('towns')->insert([
            'town_name' => 'Masada',
            'population' => '5000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
			'xcoord' => '2336',
            'ycoord' => '2020',
            'region' => '35',
            'province' => '181'
        ]); 
        //570
		DB::table('towns')->insert([
            'town_name' => 'Ascolon',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'timber' => 'cypress',
			'xcoord' => '2295',
            'ycoord' => '1999',
            'region' => '35',
            'province' => '181'
        ]);
        //571
		DB::table('towns')->insert([
            'town_name' => 'Raphia',
            'climate' => 'hot steppe',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'timber' => 'juniper',
			'xcoord' => '2283',
            'ycoord' => '2016',
            'region' => '35',
            'province' => '181'
        ]);
        //Samaria
        //572
		DB::table('towns')->insert([
            'town_name' => 'Caesarea Maritima',
            'pack' => 'horse',
            'fish' => 'fish',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'barley',
            'vine' => 'grapes',
            'seasoning' => 'olives',
            'timber' => 'juniper',
            'glass' => 'glass',
			'xcoord' => '2313',
            'ycoord' => '1951',
            'region' => '35',
            'province' => '182'
        ]); 
        //573
		DB::table('towns')->insert([
            'town_name' => 'Samaria',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2333',
            'ycoord' => '1960',
            'region' => '35',
            'province' => '182'
        ]); 
        //Galilee
        //574
		DB::table('towns')->insert([
            'town_name' => 'Nazareth',
            'wool' => 'sheep',
            'poultry' => 'chicken',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'seasoning' => 'olives',
            'pottery' => 'clay',
            'timber' => 'cypress',
			'xcoord' => '2336',
            'ycoord' => '1935',
            'region' => '35',
            'province' => '183'
        ]); 
        //Arabia
        //Arabia Nabatene
        //575
		DB::table('towns')->insert([
            'town_name' => 'Bostra',
            'population' => '20000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2395',
            'ycoord' => '1949',
            'region' => '36',
            'province' => '184'
        ]); 
        //576
		DB::table('towns')->insert([
            'town_name' => 'Gerasa',
            'population' => '20000',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2358',
            'ycoord' => '1959',
            'region' => '36',
            'province' => '184'
        ]); 
        //577
		DB::table('towns')->insert([
            'town_name' => 'Philadelphia',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2360',
            'ycoord' => '1980',
            'region' => '36',
            'province' => '184'
        ]); 
        //Arabia Petraea
        //578
		DB::table('towns')->insert([
            'town_name' => 'Avdat',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2309',
            'ycoord' => '2058',
            'region' => '36',
            'province' => '185'
        ]); 
        //579
		DB::table('towns')->insert([
            'town_name' => 'Petra',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'silver' => 'silver',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2352',
            'ycoord' => '2081',
            'region' => '36',
            'province' => '185'
        ]); 
        //580
		DB::table('towns')->insert([
            'town_name' => 'Tabawa',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2399',
            'ycoord' => '2189',
            'region' => '36',
            'province' => '185'
        ]); 
        //581
		DB::table('towns')->insert([
            'town_name' => 'Tiamat',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2499',
            'ycoord' => '2233',
            'region' => '36',
            'province' => '185'
        ]); 
        //582
		DB::table('towns')->insert([
            'town_name' => 'Hegra',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2468',
            'ycoord' => '2291',
            'region' => '36',
            'province' => '185'
        ]);
        //583
		DB::table('towns')->insert([
            'town_name' => 'Dedan',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2477',
            'ycoord' => '2318',
            'region' => '36',
            'province' => '185'
        ]); 
        //Arabia Deserta
        //584
		DB::table('towns')->insert([
            'town_name' => 'Jubbah',
            'climate' => 'desert oasis',
            'pack' => 'camel',      
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2659',
            'ycoord' => '2242',
            'region' => '36',
            'province' => '186'
        ]); 
        //585
		DB::table('towns')->insert([
            'town_name' => 'Dumah',
            'climate' => 'desert oasis',
            'pack' => 'camel',      
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2584',
            'ycoord' => '2098',
            'region' => '36',
            'province' => '186'
        ]);  
        //Arabia Lihyan
        //586
		DB::table('towns')->insert([
            'town_name' => 'Khaybar',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2544',
            'ycoord' => '2355',
            'region' => '36',
            'province' => '187'
        ]); 
        //587
		DB::table('towns')->insert([
            'town_name' => 'Yatrib',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2552',
            'ycoord' => '2409',
            'region' => '36',
            'province' => '187'
        ]);
        //588
		DB::table('towns')->insert([
            'town_name' => 'Charmutha',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2482',
            'ycoord' => '2440',
            'region' => '36',
            'province' => '187'
        ]); 
        //589
		DB::table('towns')->insert([
            'town_name' => 'Makkah',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2565',
            'ycoord' => '2580',
            'region' => '36',
            'province' => '187'
        ]); 
        //590
		DB::table('towns')->insert([
            'town_name' => 'Giddah',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2526',
            'ycoord' => '2572',
            'region' => '36',
            'province' => '187'
        ]);
        //591
		DB::table('towns')->insert([
            'town_name' => 'Taif',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2593',
            'ycoord' => '2586',
            'region' => '36',
            'province' => '187'
        ]);
        //Arabia Kindah
        //592
		DB::table('towns')->insert([
            'town_name' => 'Unaizah',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'vine' => 'grapes',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2773',
            'ycoord' => '2306',
            'region' => '36',
            'province' => '188'
        ]); 
        //593
		DB::table('towns')->insert([
            'town_name' => 'Hajr',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'sheep',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'gold' => 'gold',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2839',
            'ycoord' => '2369',
            'region' => '36',
            'province' => '188'
        ]); 
        //Arabia Gerrha
        //594
		DB::table('towns')->insert([
            'town_name' => 'Thaj',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'gold' => 'gold',
            'timber' => 'palm',
            'spice' => 'spice',
			'xcoord' => '3007',
            'ycoord' => '2269',
            'region' => '36',
            'province' => '189'
        ]); 
        //595
		DB::table('towns')->insert([
            'town_name' => 'Gerrha',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'game' => 'hare',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'gold' => 'gold',
            'silver' => 'silver',
            'timber' => 'palm',
            'spice' => 'spice',
			'xcoord' => '3059',
            'ycoord' => '2359',
            'region' => '36',
            'province' => '189'
        ]); 
        //Arabia Felix      
        //596
		DB::table('towns')->insert([
            'town_name' => 'Eudaemon',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'salt' => 'salt',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2823',
            'ycoord' => '3035',
            'region' => '36',
            'province' => '190'
        ]);  
        //597
		DB::table('towns')->insert([
            'town_name' => 'Mocha',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'spice' => 'spice',
            'scent' => 'incense',
			'xcoord' => '2737',
            'ycoord' => '3001',
            'region' => '36',
            'province' => '190'
        ]);    
        //598
		DB::table('towns')->insert([
            'town_name' => 'Marib',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'pottery' => 'clay',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2821',
            'ycoord' => '2899',
            'region' => '36',
            'province' => '190'
        ]);   
        //599
		DB::table('towns')->insert([
            'town_name' => 'Sanaa',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'silver' => 'silver',
            'salt' => 'salt',
            'pottery' => 'clay',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2786',
            'ycoord' => '2903',
            'region' => '36',
            'province' => '190'
        ]); 
        //600
		DB::table('towns')->insert([
            'town_name' => 'Karna',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '2784',
            'ycoord' => '2790',
            'region' => '36',
            'province' => '190'
        ]); 
        //601
		DB::table('towns')->insert([
            'town_name' => 'Nageran',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'copper' => 'copper',
            'pottery' => 'clay',
            'timber' => 'palm',
            'glass' => 'glass',
            'scent' => 'incense',
			'xcoord' => '2793',
            'ycoord' => '2764',
            'region' => '36',
            'province' => '190'
        ]); 
        //602
		DB::table('towns')->insert([
            'town_name' => 'Qana',
            'climate' => 'desert oasis',
            'pack' => 'camel',
            'wool' => 'goat',
            'fish' => 'fish',
            'game' => 'deer',
            'fruit' => 'fruit',
            'grain' => 'emmer',
            'timber' => 'palm',
            'scent' => 'incense',
			'xcoord' => '3035',
            'ycoord' => '2946',
            'region' => '36',
            'province' => '190'
        ]);      
    }
}
