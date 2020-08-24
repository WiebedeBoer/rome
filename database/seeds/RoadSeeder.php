<?php

use Illuminate\Database\Seeder;

class RoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('roads')->insert([
            'road_name' => 'Via Appia'
        ]);
        //2
        DB::table('roads')->insert([
            'road_name' => 'Via Salaria'
        ]);
        //3
        DB::table('roads')->insert([
            'road_name' => 'Via Popilia'
        ]);
        //4
        DB::table('roads')->insert([
            'road_name' => 'Via Cassia'
        ]);
        //5
        DB::table('roads')->insert([
            'road_name' => 'Via Augusta'
        ]);
        //6
        DB::table('roads')->insert([
            'road_name' => 'Via Adriatica'
        ]);
        //7
        DB::table('roads')->insert([
            'road_name' => 'Via Sarda'
        ]);
        //8
        DB::table('roads')->insert([
            'road_name' => 'Via Postumia'
        ]);
        //9
        DB::table('roads')->insert([
            'road_name' => 'Via Valeria'
        ]);
        //10
        DB::table('roads')->insert([
            'road_name' => 'Via Pompeia'
        ]);
        //11
        DB::table('roads')->insert([
            'road_name' => 'Via Helvetica'
        ]);
        //12
        DB::table('roads')->insert([
            'road_name' => 'Via Claudia Augusta'
        ]);
        //13
        DB::table('roads')->insert([
            'road_name' => 'Via Flavia'
        ]);
        //14
        DB::table('roads')->insert([
            'road_name' => 'Via Graeca'
        ]);
        //15
        DB::table('roads')->insert([
            'road_name' => 'Via Egnatia'
        ]);
        //16
        DB::table('roads')->insert([
            'road_name' => 'Via Gemina'
        ]);
        //17
        DB::table('roads')->insert([
            'road_name' => 'Via Carpata'
        ]);
        //18
        DB::table('roads')->insert([
            'road_name' => 'Via Aurelia'
        ]);
        //19
        DB::table('roads')->insert([
            'road_name' => 'Via Britannica'
        ]);
        //20
        DB::table('roads')->insert([
            'road_name' => 'Via Aquitania'
        ]);
        //21
        DB::table('roads')->insert([
            'road_name' => 'Via Gallica'
        ]);
        //22
        DB::table('roads')->insert([
            'road_name' => 'Via Agrippa'
        ]);
        //23
        DB::table('roads')->insert([
            'road_name' => 'Via Germanica'
        ]);
        //24
        DB::table('roads')->insert([
            'road_name' => 'Via Asturica'
        ]);
        //25
        DB::table('roads')->insert([
            'road_name' => 'Via Tarraconensis'
        ]);
        //26
        DB::table('roads')->insert([
            'road_name' => 'Via Domitiana'
        ]);
        //27
        DB::table('roads')->insert([
            'road_name' => 'Via Delapidata'
        ]);
        //28
        DB::table('roads')->insert([
            'road_name' => 'Via Lusitanorum'
        ]);
        //29
        DB::table('roads')->insert([
            'road_name' => 'Via Via Augusta Militarem'
        ]);    
        //30
        DB::table('roads')->insert([
            'road_name' => 'Via Claudia'
        ]);        
        //31
        DB::table('roads')->insert([
            'road_name' => 'Via Numidia'
        ]);
        //32
        DB::table('roads')->insert([
            'road_name' => 'Via Hadriana'
        ]);
        //33
        DB::table('roads')->insert([
            'road_name' => 'Via Maris'
        ]);
        //34
        DB::table('roads')->insert([
            'road_name' => 'Via Asiana'
        ]);
        //35
        DB::table('roads')->insert([
            'road_name' => 'Via Traiana Nova'
        ]);
        //36
        DB::table('roads')->insert([
            'road_name' => 'Via Valeria Nova'
        ]);
        //37
        DB::table('roads')->insert([
            'road_name' => 'Via Galatica'
        ]);
        //38
        DB::table('roads')->insert([
            'road_name' => 'Via Persica'
        ]);
        //39
        DB::table('roads')->insert([
            'road_name' => 'Via Pontica'
        ]);
        //40
        DB::table('roads')->insert([
            'road_name' => 'Via Baetica'
        ]);
        //41
        DB::table('roads')->insert([
            'road_name' => 'Via Flaminia'
        ]);
        //42
        DB::table('roads')->insert([
            'road_name' => 'Via Strata'
        ]);
        //43
        DB::table('roads')->insert([
            'road_name' => 'Via Militaris'
        ]); 
        //44
        DB::table('roads')->insert([
            'road_name' => 'Via Diagonalis'
        ]); 
        //45
        DB::table('roads')->insert([
            'road_name' => 'Via Tiburtina'
        ]); 
        //46
        DB::table('roads')->insert([
            'road_name' => 'Via Syrica'
        ]); 
        //47
        DB::table('roads')->insert([
            'road_name' => 'Via Tiberia'
        ]); 

    }
}

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Via Appia, 8
        //Roma
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '1',
            'town' => '1'
        ]);
        //Lanuvium
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '1',
            'town' => '3'
        ]);
        //Tarracina
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '1',
            'town' => '4'
        ]);
        //Capua
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '1',
            'town' => '6'
        ]);
        //Beneventum
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '1',
            'town' => '21'
        ]);
        //Potentia
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '1',
            'town' => '11'
        ]);
        //Tarentum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '1',
            'town' => '15'
        ]);
        //Brundisium
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '1',
            'town' => '16'
        ]);

        //Via Salaria, 15
        //Ostia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '2',
            'town' => '2'
        ]);
        //Roma
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '2',
            'town' => '1'
        ]);
        //Reate
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '2',
            'town' => '23'
        ]);
        //Spoletum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '2',
            'town' => '24'
        ]);
        //Asculum
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '2',
            'town' => '27'
        ]);
        //Ancona
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '2',
            'town' => '26'
        ]);
        //Ariminium
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '2',
            'town' => '45'
        ]);
        //Ravenna
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '2',
            'town' => '46'
        ]);
        //Patavium
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '2',
            'town' => '78'
        ]);
        //Aquileia
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '2',
            'town' => '80'
        ]);
        //Emona
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '2',
            'town' => '74'
        ]);
        //Celeia
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '2',
            'town' => '73'
        ]);
        //Poetovio
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '2',
            'town' => '364'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '2',
            'town' => '71'
        ]);
        //Savaria
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '2',
            'town' => '360'
        ]);
        //Carnuntum
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '2',
            'town' => '359'
        ]);

        //Via Popilia, 18
        //Rhegium
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '3',
            'town' => '14'
        ]);
        //Consentia
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '3',
            'town' => '12'
        ]);
        //Paestum
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '3',
            'town' => '9'
        ]);
        //Pompei
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '3',
            'town' => '8'
        ]);
        //Neapolis
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '3',
            'town' => '7'
        ]);
        //Capua
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '3',
            'town' => '6'
        ]);
        //Casinum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '3',
            'town' => '5'
        ]);
        //Roma
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '3',
            'town' => '1'
        ]);
        //Gravisca
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '3',
            'town' => '28'
        ]);
        //Rusellae
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '3',
            'town' => '29'
        ]);
        //Pisa
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '3',
            'town' => '32'
        ]);
        //Luna
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '3',
            'town' => '34'
        ]);
        //Genua
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '3',
            'town' => '49'
        ]);
        //Savona
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '3',
            'town' => '50'
        ]);
        //Cemelenum
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '3',
            'town' => '82'
        ]);
        //Telo Martius
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '3',
            'town' => '89'
        ]);
        //Massilia
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '3',
            'town' => '90'
        ]);
        //Arelate
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '3',
            'town' => '91'
        ]);

        //Via Cassia, 6
        //Roma
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '4',
            'town' => '1'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '4',
            'town' => '25'
        ]);
        //Arretium
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '4',
            'town' => '30'
        ]);
        //Saena
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '4',
            'town' => '31'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '4',
            'town' => '33'
        ]);
        //Luna
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '4',
            'town' => '34'
        ]);

        //Via Augusta, 27
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '5',
            'town' => '45'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '5',
            'town' => '47'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '5',
            'town' => '48'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '5',
            'town' => '51'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '5',
            'town' => '52'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '5',
            'town' => '55'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '5',
            'town' => '57'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '5',
            'town' => '54'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '5',
            'town' => '81'
        ]);
        //Arelate
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '5',
            'town' => '91'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '5',
            'town' => '98'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '5',
            'town' => '111'
        ]);
        //Narbo Martius
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '5',
            'town' => '105'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '5',
            'town' => '182'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '5',
            'town' => '183'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '5',
            'town' => '184'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '5',
            'town' => '185'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '5',
            'town' => '191'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '5',
            'town' => '194'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '5',
            'town' => '195'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '5',
            'town' => '196'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '5',
            'town' => '210'
        ]);
        //Corduba
        DB::table('milestones')->insert([
            'milestone' => '23',
            'road' => '5',
            'town' => '209'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '24',
            'road' => '5',
            'town' => '208'
        ]);
        //Hispalis
        DB::table('milestones')->insert([
            'milestone' => '25',
            'road' => '5',
            'town' => '207'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '26',
            'road' => '5',
            'town' => '206'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '27',
            'road' => '5',
            'town' => '204'
        ]);

        //Via Adriatica, 6
        //Brundisium
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '6',
            'town' => '16'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '6',
            'town' => '17'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '6',
            'town' => '18'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '6',
            'town' => '19'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '6',
            'town' => '20'
        ]);
        //Ancona
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '6',
            'town' => '26'
        ]);

        //Via Sarda, 2
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '7',
            'town' => '42'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '7',
            'town' => '43'
        ]);

        //Via Postumia, 6
        //Genua
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '8',
            'town' => '49'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '8',
            'town' => '53'
        ]);
        //Placentia
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '8',
            'town' => '52'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '8',
            'town' => '77'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '8',
            'town' => '79'
        ]);
        //Aquileia
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '8',
            'town' => '80'
        ]);

        //Via Valeria, 6
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '9',
            'town' => '41'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '9',
            'town' => '35'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '9',
            'town' => '36'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '9',
            'town' => '37'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '9',
            'town' => '38'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '9',
            'town' => '39'
        ]);
 
        //Via Pompeia, 3
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '10',
            'town' => '39'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '10',
            'town' => '40'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '10',
            'town' => '41'
        ]);

        //Via Helvetica, 7
        //Placentia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '11',
            'town' => '52'
        ]);
        //Mediolanum
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '11',
            'town' => '56'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '11',
            'town' => '83'
        ]);
        //Geneva
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '11',
            'town' => '97'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '11',
            'town' => '96'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '11',
            'town' => '94'
        ]);
        //Vienne
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '11',
            'town' => '95'
        ]);

        //Via Claudia Augusta, 11
        //Florentia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '12',
            'town' => '33'
        ]);
        //Bononia
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '12',
            'town' => '47'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '12',
            'town' => '76'
        ]);
        //Verona
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '12',
            'town' => '77'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '12',
            'town' => '63'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '12',
            'town' => '62'
        ]);
        //Veldidena
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '12',
            'town' => '64'
        ]);
        //Vindelicorum
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '12',
            'town' => '65'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '12',
            'town' => '60'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '12',
            'town' => '59'
        ]);
        //Mediolanum
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '12',
            'town' => '56'
        ]);

        //Via Flavia, 22
        //Aquileia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '13',
            'town' => '80'
        ]);
        //Tergeste
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '13',
            'town' => '356'
        ]);
        //Pola
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '13',
            'town' => '358'
        ]);
        //Tarsatica
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '13',
            'town' => '357'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '13',
            'town' => '354'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '13',
            'town' => '355'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '13',
            'town' => '349'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '13',
            'town' => '350'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '13',
            'town' => '348'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '13',
            'town' => '328'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '13',
            'town' => '327'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '13',
            'town' => '323'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '13',
            'town' => '322'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '13',
            'town' => '320'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '13',
            'town' => '319'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '13',
            'town' => '318'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '13',
            'town' => '316'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '13',
            'town' => '315'
        ]);
        //Patrae
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '13',
            'town' => '313'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '13',
            'town' => '312'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '13',
            'town' => '311'
        ]);
        //Sparta
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '13',
            'town' => '308'
        ]);

        //Via Graeca, 17
        //Thebes
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '14',
            'town' => '318'
        ]);
        //Lamia
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '14',
            'town' => '321'
        ]);
        //Pharsalus
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '14',
            'town' => '326'
        ]);
        //Larissa
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '14',
            'town' => '325'
        ]);
        //Thessalonica
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '14',
            'town' => '330'
        ]);
        //Tiveriopolis
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '14',
            'town' => '332'
        ]);
        //Stobi
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '14',
            'town' => '333'
        ]);
        //Scupi
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '14',
            'town' => '346'
        ]);
        //Naissus
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '14',
            'town' => '347'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '14',
            'town' => '389'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '14',
            'town' => '382'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '14',
            'town' => '379'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '14',
            'town' => '378'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '14',
            'town' => '377'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '14',
            'town' => '376'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '14',
            'town' => '375'
        ]);
        //Apulum
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '14',
            'town' => '374'
        ]);

        //Via Egnatia, 7
        //Epidaurus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '15',
            'town' => '328'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '15',
            'town' => '329'
        ]);
        //Thessalonica
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '15',
            'town' => '330'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '15',
            'town' => '331'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '15',
            'town' => '335'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '15',
            'town' => '336'
        ]);
        //Byzantium
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '15',
            'town' => '337'
        ]);

        //Via Gemina, 14
        //Perinthus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '16',
            'town' => '336'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '16',
            'town' => '339'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '16',
            'town' => '338'
        ]);
        //Serdica
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '16',
            'town' => '334'
        ]);
        //Naissus
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '16',
            'town' => '347'
        ]);
        //Viminacium
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '16',
            'town' => '363'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '16',
            'town' => '362'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '16',
            'town' => '361'
        ]);
        //Marsonia
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '16',
            'town' => '369'
        ]);
        //Siscia
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '16',
            'town' => '367'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '16',
            'town' => '368'
        ]);
        //Emona
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '16',
            'town' => '74'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '16',
            'town' => '72'
        ]);
        //Iuvavum
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '16',
            'town' => '69'
        ]);

        //Via Carpata, 11
        //Philippopolis
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '17',
            'town' => '338'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '17',
            'town' => '340'
        ]);
        //Oescus
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '17',
            'town' => '386'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '17',
            'town' => '385'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '17',
            'town' => '383'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '17',
            'town' => '384'
        ]);
        //Apulum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '17',
            'town' => '374'
        ]);
        //Napoca
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '17',
            'town' => '388'
        ]);
        //Porolissum
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '17',
            'town' => '387'
        ]);
        //Partiscum
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '17',
            'town' => '373'
        ]);
        //Sopianae
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '17',
            'town' => '372'
        ]);

        //Via Aurelia, 24
        //Narona
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '18',
            'town' => '350'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '18',
            'town' => '351'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '18',
            'town' => '353'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '18',
            'town' => '352'
        ]);
        //Sirmium
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '18',
            'town' => '361'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '18',
            'town' => '372'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '18',
            'town' => '371'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '18',
            'town' => '370'
        ]);
        //Carnuntum
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '18',
            'town' => '359'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '18',
            'town' => '75'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '18',
            'town' => '70'
        ]);
        //Iuvavum
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '18',
            'town' => '69'
        ]);
        //Vindelicorum
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '18',
            'town' => '65'
        ]);
        //Turicum
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '18',
            'town' => '61'
        ]);
        //Vindonissa
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '18',
            'town' => '87'
        ]);
        //Rauracorum
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '18',
            'town' => '85'
        ]);
        //Andematunum
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '18',
            'town' => '104'
        ]);
        //Alesia
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '18',
            'town' => '103'
        ]);
        //Augustodunum
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '18',
            'town' => '102'
        ]);
        //Agedincum
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '18',
            'town' => '130'
        ]);
        //Durocorturum
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '18',
            'town' => '136'
        ]);
        //Bagacum
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '18',
            'town' => '134'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '23',
            'road' => '18',
            'town' => '133'
        ]);
        //Gesioracum
        DB::table('milestones')->insert([
            'milestone' => '24',
            'road' => '18',
            'town' => '135'
        ]);

        //Via Britannica, 8
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '19',
            'town' => '168'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '19',
            'town' => '159'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '19',
            'town' => '160'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '19',
            'town' => '161'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '19',
            'town' => '173'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '19',
            'town' => '174'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '19',
            'town' => '175'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '19',
            'town' => '177'
        ]);

        //Via Aquitania, 10
        //Narbo Martius
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '20',
            'town' => '105'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '20',
            'town' => '106'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '20',
            'town' => '107'
        ]);
        //Aginnum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '20',
            'town' => '112'
        ]);
        //Burdigala
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '20',
            'town' => '113'
        ]);
        //Limonum
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '20',
            'town' => '120'
        ]);
        //Turonum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '20',
            'town' => '125'
        ]);
        //Cenabum
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '20',
            'town' => '126'
        ]);
        //Lutetia
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '20',
            'town' => '127'
        ]);
        //Durocorturum
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '20',
            'town' => '136'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '20',
            'town' => '137'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '20',
            'town' => '138'
        ]);
        //Ubiorum
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '20',
            'town' => '143'
        ]);

        //Via Gallica, 7
        //Portus Namnetus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '21',
            'town' => '121'
        ]);
        //Turonum
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '21',
            'town' => '125'
        ]);
        //Avaricum
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '21',
            'town' => '124'
        ]);
        //Augustodunum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '21',
            'town' => '102'
        ]);
        //Divio
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '21',
            'town' => '101'
        ]);
        //Vesontio
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '21',
            'town' => '86'
        ]);
        //Andematunum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '21',
            'town' => '104'
        ]);

        //Via Agrippa, 11
        //Arelate
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '22',
            'town' => '91'
        ]);
        //Arausio
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '22',
            'town' => '92'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '22',
            'town' => '93'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '22',
            'town' => '95'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '22',
            'town' => '99'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '22',
            'town' => '100'
        ]);
        //Divio
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '22',
            'town' => '101'
        ]);
        //Alesia
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '22',
            'town' => '103'
        ]);
        //Divodurum
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '22',
            'town' => '131'
        ]);
        //Treverorum
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '22',
            'town' => '132'
        ]);
        //Mogontiacum
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '22',
            'town' => '147'
        ]);

        //Via Germanica, 8
        //Geneva
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '23',
            'town' => '97'
        ]);
        //Aventicum
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '23',
            'town' => '88'
        ]);
        //
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '23',
            'town' => '84'
        ]);
        //Rauracorum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '23',
            'town' => '85'
        ]);
        //Argentoratum
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '23',
            'town' => '146'
        ]);
        //Mogontiacum
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '23',
            'town' => '147'
        ]);
        //Confluentes
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '23',
            'town' => '145'
        ]);
        //Ubiorum
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '23',
            'town' => '143'
        ]);

        //Via Asturica
        //Lucus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '24',
            'town' => '218'
        ]);
        //Asturica
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '24',
            'town' => '217'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '24',
            'town' => '216'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '24',
            'town' => '193'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '24',
            'town' => '192'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '24',
            'town' => '189'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '24',
            'town' => '188'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '24',
            'town' => '116'
        ]);
        //Burdigala
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '24',
            'town' => '113'
        ]);
        //Vesunna
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '24',
            'town' => '117'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '24',
            'town' => '114'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '24',
            'town' => '115'
        ]);
        //Lugdunum
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '24',
            'town' => '99'
        ]);

        //Via Tarraconensis
        //Tarraco
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '25',
            'town' => '185'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '25',
            'town' => '186'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '25',
            'town' => '187'
        ]);
        //Pompaelo
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '25',
            'town' => '188'
        ]);

        //Via Domitiana, 6
        //Byzantium
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '26',
            'town' => '337'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '26',
            'town' => '342'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '26',
            'town' => '341'
        ]);
        //Tomis
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '26',
            'town' => '343'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '26',
            'town' => '344'
        ]);
        //Oescus
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '26',
            'town' => '386'
        ]);

        //Via Delapidata
        //Asturica
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '27',
            'town' => '217'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '27',
            'town' => '215'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '27',
            'town' => '225'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '27',
            'town' => '226'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '27',
            'town' => '227'
        ]);
        //Hispalis
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '27',
            'town' => '206'
        ]);

        //Via Lusitanorum
        //Hispalis
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '28',
            'town' => '206'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '28',
            'town' => '205'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '28',
            'town' => '230'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '28',
            'town' => '229'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '28',
            'town' => '228'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '28',
            'town' => '224'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '28',
            'town' => '223'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '28',
            'town' => '222'
        ]);
        //Portus Cale
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '28',
            'town' => '221'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '28',
            'town' => '220'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '28',
            'town' => '219'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '28',
            'town' => '217'
        ]);

        //Via Augusta Militarem
        //Salduie
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '29',
            'town' => '187'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '29',
            'town' => '201'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '29',
            'town' => '200'
        ]);
        //Toletum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '29',
            'town' => '212'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '29',
            'town' => '211'
        ]);
        //Emerita
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '29',
            'town' => '226'
        ]);

        //Via Claudia, 25
        //Volubilis
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '30',
            'town' => '237'
        ]);
        //Sala
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '30',
            'town' => '236'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '30',
            'town' => '235'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '30',
            'town' => '234'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '30',
            'town' => '233'
        ]);
        //Russadir
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '30',
            'town' => '238'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '30',
            'town' => '240'
        ]);
        //Cartenna
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '30',
            'town' => '241'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '30',
            'town' => '244'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '30',
            'town' => '245'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '30',
            'town' => '246'
        ]);
        //Russicada
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '30',
            'town' => '248'
        ]);
        //Hippo Regius
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '30',
            'town' => '249'
        ]);
        //Carthago
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '30',
            'town' => '265'
        ]);
        //Hadrumetum
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '30',
            'town' => '266'
        ]);
        //Tacape
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '30',
            'town' => '271'
        ]);
        //Sabrata
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '30',
            'town' => '272'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '30',
            'town' => '273'
        ]);
        //Leptis Magna
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '30',
            'town' => '274'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '30',
            'town' => '275'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '30',
            'town' => '279'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '30',
            'town' => '280'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '23',
            'road' => '30',
            'town' => '281'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '24',
            'road' => '30',
            'town' => '282'
        ]);
        //Alexandria
        DB::table('milestones')->insert([
            'milestone' => '25',
            'road' => '30',
            'town' => '284'
        ]);

        //Via Numidia, 13
        //Carthago
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '31',
            'town' => '265'
        ]);
        //Thugga
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '31',
            'town' => '262'
        ]);
        //Sicca Veneria
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '31',
            'town' => '255'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '31',
            'town' => '251'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '31',
            'town' => '250'
        ]);
        //Cirta
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '31',
            'town' => '252'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '31',
            'town' => '259'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '31',
            'town' => '258'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '31',
            'town' => '257'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '31',
            'town' => '253'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '31',
            'town' => '615'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '31',
            'town' => '254'
        ]);
        //Hadrumetum
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '31',
            'town' => '266'
        ]);

        //Via Hadriana, 11
        //Alexandria
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '32',
            'town' => '284'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '32',
            'town' => '286'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '32',
            'town' => '287'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '32',
            'town' => '288'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '32',
            'town' => '292'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '32',
            'town' => '293'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '32',
            'town' => '294'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '32',
            'town' => '295'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '32',
            'town' => '296'
        ]);
        //Syene
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '32',
            'town' => '297'
        ]);
        //Berenice
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '32',
            'town' => '300'
        ]);

        //Via Maris, 14
        //Alexandria
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '33',
            'town' => '284'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '33',
            'town' => '285'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '33',
            'town' => '289'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '33',
            'town' => '290'
        ]);
        //Pelusium
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '33',
            'town' => '291'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '33',
            'town' => '571'
        ]);
        //Ascolon
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '33',
            'town' => '570'
        ]);
        //Caesarea Maritima
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '33',
            'town' => '572'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '33',
            'town' => '561'
        ]);
        //Tyrus
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '33',
            'town' => '560'
        ]);
        //Damascus
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '33',
            'town' => '556'
        ]);
        //Palmyra
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '33',
            'town' => '555'
        ]);
        //Beroea
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '33',
            'town' => '550'
        ]);
        //Antiochia
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '33',
            'town' => '551'
        ]);

        //Via Asiana, 23
        //Pergamum
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '34',
            'town' => '408'
        ]);
        //Smyrna
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '34',
            'town' => '398'
        ]);
        //Ephesus
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '34',
            'town' => '399'
        ]);
        //Miletus
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '34',
            'town' => '401'
        ]);
        //Attalia
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '34',
            'town' => '411'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '34',
            'town' => '412'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '34',
            'town' => '453'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '34',
            'town' => '454'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '34',
            'town' => '455'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '34',
            'town' => '459'
        ]);
        //Tarsus
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '34',
            'town' => '457'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '34',
            'town' => '458'
        ]);
        //Antiochia
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '34',
            'town' => '551'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '34',
            'town' => '552'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '34',
            'town' => '558'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '34',
            'town' => '559'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '34',
            'town' => '562'
        ]);
        //Tyrus
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '34',
            'town' => '560'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '34',
            'town' => '574'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '34',
            'town' => '573'
        ]);
        //Hierosolyma
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '34',
            'town' => '567'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '34',
            'town' => '568'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '23',
            'road' => '34',
            'town' => '570'
        ]);

        //Via Traiana Nova, 8
        //Damascus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '35',
            'town' => '556'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '35',
            'town' => '563'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '35',
            'town' => '564'
        ]);
        //Bostra
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '35',
            'town' => '575'
        ]);
        //Philadelphia
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '35',
            'town' => '577'
        ]);
        //Petra
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '35',
            'town' => '579'
        ]);
        //Avdat
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '35',
            'town' => '578'
        ]);
        //Memphis
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '35',
            'town' => '288'
        ]);

        //Via Valeria Nova, 12
        //Pergamum
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '36',
            'town' => '408'
        ]);
        //Cyzicus
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '36',
            'town' => '413'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '36',
            'town' => '433'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '36',
            'town' => '432'
        ]);      
        //Nicaea
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '36',
            'town' => '414'
        ]);
        //Nicomedia
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '36',
            'town' => '415'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '36',
            'town' => '417'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '36',
            'town' => '418'
        ]);
        //Ancyra
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '36',
            'town' => '443'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '36',
            'town' => '449'
        ]);
        //Tyana
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '36',
            'town' => '448'
        ]);
        //Tarsus
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '36',
            'town' => '457'
        ]);

        //Via Galatica, 10
        //Miletus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '37',
            'town' => '401'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '37',
            'town' => '402'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '37',
            'town' => '403'
        ]);
        //Apamea
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '37',
            'town' => '424'
        ]);
        //Iconium
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '37',
            'town' => '434'
        ]);
        //Tyana
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '37',
            'town' => '448'
        ]);
        //Mazaca
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '37',
            'town' => '446'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '37',
            'town' => '451'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '37',
            'town' => '452'
        ]);
        //Arsamosata
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '37',
            'town' => '544'
        ]);

        //Via Persica, 23
        //Smyrna
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '38',
            'town' => '398'
        ]);
        //Sardes
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '38',
            'town' => '405'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '38',
            'town' => '428'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '38',
            'town' => '431'
        ]);
        //Dorylaeum
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '38',
            'town' => '429'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '38',
            'town' => '444'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '38',
            'town' => '430'
        ]);
        //Ancyra
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '38',
            'town' => '443'
        ]);
        //Tavium
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '38',
            'town' => '442'
        ]);
        //Sebasteia
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '38',
            'town' => '460'
        ]);
        //Melitene
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '38',
            'town' => '452'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '12',
            'road' => '38',
            'town' => '542'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '13',
            'road' => '38',
            'town' => '538'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '14',
            'road' => '38',
            'town' => '537'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '15',
            'road' => '38',
            'town' => '547'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '16',
            'road' => '38',
            'town' => '546'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '17',
            'road' => '38',
            'town' => '530'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '18',
            'road' => '38',
            'town' => '529'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '19',
            'road' => '38',
            'town' => '528'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '20',
            'road' => '38',
            'town' => '527'
        ]);
        //Seleucia
        DB::table('milestones')->insert([
            'milestone' => '21',
            'road' => '38',
            'town' => '526'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '22',
            'road' => '38',
            'town' => '525'
        ]);
        //Susa
        DB::table('milestones')->insert([
            'milestone' => '23',
            'road' => '38',
            'town' => '495'
        ]);

        //Via Pontica, 6
        //Sebasteia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '39',
            'town' => '460'
        ]);
        //Nicopolis
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '39',
            'town' => '461'
        ]);
        //Acilisene
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '39',
            'town' => '473'
        ]);

        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '39',
            'town' => '474'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '39',
            'town' => '475'
        ]);
        //Trapezus
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '39',
            'town' => '440'
        ]);

        //Via Baetica, 4
        //Gadeira
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '40',
            'town' => '204'
        ]);
        //Abdera
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '40',
            'town' => '203'
        ]);
        //Malaca
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '40',
            'town' => '202'
        ]);
        //Corduba
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '40',
            'town' => '209'
        ]);

        //Via Flaminia, 4
        //Corinthus
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '41',
            'town' => '315'
        ]);
        //Argos
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '41',
            'town' => '314'
        ]);
        //Sparta
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '41',
            'town' => '308'
        ]);
        //Gythium
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '41',
            'town' => '309'
        ]);

        //Via Strata, 11
        //Portus Adurni
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '42',
            'town' => '168'
        ]);
        //Londinium
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '42',
            'town' => '169'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '42',
            'town' => '170'
        ]);
        //Ratae Coritanorum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '42',
            'town' => '173'
        ]);
        //Viroconium
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '42',
            'town' => '167'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '42',
            'town' => '166'
        ]);
        //Bremetancum
        DB::table('milestones')->insert([
            'milestone' => '7',
            'road' => '42',
            'town' => '176'
        ]);  
        //Luguvallium
        DB::table('milestones')->insert([
            'milestone' => '8',
            'road' => '42',
            'town' => '177'
        ]);  
        //Habitancum
        DB::table('milestones')->insert([
            'milestone' => '9',
            'road' => '42',
            'town' => '178'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '10',
            'road' => '42',
            'town' => '179'
        ]);  
        DB::table('milestones')->insert([
            'milestone' => '11',
            'road' => '42',
            'town' => '180'
        ]); 
        
        //Via Militaris, 4
        //Ubiorum
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '43',
            'town' => '143'
        ]);  
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '43',
            'town' => '140'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '43',
            'town' => '139'
        ]);  
        //Portus Batavorum
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '43',
            'town' => '141'
        ]); 

        //Via Diagonalis
        //Poetovio
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '44',
            'town' => '364'
        ]);  
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '44',
            'town' => '365'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '44',
            'town' => '366'
        ]);  
        //Marsonia 
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '44',
            'town' => '369'
        ]); 

        //Via Tiburtina, 3
        //Roma
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '45',
            'town' => '1'
        ]);
        //Marruvium  
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '45',
            'town' => '22'
        ]); 
        //Histonium
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '45',
            'town' => '20'
        ]);  

        //Via Syrica, 5
        //Beroea
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '46',
            'town' => '550'
        ]);  
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '46',
            'town' => '549'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '46',
            'town' => '543'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '46',
            'town' => '539'
        ]); 
        //Edessa
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '46',
            'town' => '538'
        ]); 

        //Via Tiberia
        //Sinope
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '47',
            'town' => '420'
        ]); 
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '47',
            'town' => '437'
        ]);
        //Sebasteia
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '47',
            'town' => '460'
        ]); 
 
    }
}
