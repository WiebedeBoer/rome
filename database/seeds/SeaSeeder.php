<?php

use Illuminate\Database\Seeder;

class SeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('seas')->insert([
            'sea_name' => 'Pontus Euxinus'
        ]);
        //2
        DB::table('seas')->insert([
            'sea_name' => 'Propontis'
        ]);
        //3
        DB::table('seas')->insert([
            'sea_name' => 'Mare Aegaeum'
        ]);
        //4
        DB::table('seas')->insert([
            'sea_name' => 'Mare Levantinum'
        ]);
        //5
        DB::table('seas')->insert([
            'sea_name' => 'Mare Libycum'
        ]);
        //6
        DB::table('seas')->insert([
            'sea_name' => 'Mare Ionium'
        ]);
        //7
        DB::table('seas')->insert([
            'sea_name' => 'Mare Hadriaticum'
        ]);
        //8
        DB::table('seas')->insert([
            'sea_name' => 'Mare Tyrrhenum'
        ]);
        //9
        DB::table('seas')->insert([
            'sea_name' => 'Mare Ligusticum'
        ]);
        //10
        DB::table('seas')->insert([
            'sea_name' => 'Sinus Gallicus'
        ]);
        //11
        DB::table('seas')->insert([
            'sea_name' => 'Mare Sardonium'
        ]);
        //12
        DB::table('seas')->insert([
            'sea_name' => 'Mare Balearicum'
        ]);
        //13
        DB::table('seas')->insert([
            'sea_name' => 'Mare Hibericum'
        ]);
        //14
        DB::table('seas')->insert([
            'sea_name' => 'Oceanus Atlanticus'
        ]);
        //15
        DB::table('seas')->insert([
            'sea_name' => 'Mare Cantabricum'
        ]);
        //16
        DB::table('seas')->insert([
            'sea_name' => 'Mare Britannicum'
        ]);
        //17
        DB::table('seas')->insert([
            'sea_name' => 'Mare Germanicum'
        ]);
        //18
        DB::table('seas')->insert([
            'sea_name' => 'Mare Hibernicum'
        ]);
        //19
        DB::table('seas')->insert([
            'sea_name' => 'Sinus Arabicus'
        ]);

    }
}

class SeaconnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pontus Euxinus, Propontis
		DB::table('seaconnections')->insert([
            'to' => '1',
            'from' => '2'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '2',
            'from' => '1'
        ]);
        //Propontis, Mare Aegaeum
		DB::table('seaconnections')->insert([
            'to' => '2',
            'from' => '3'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '3',
            'from' => '2'
        ]);
        //Mare Aegaeum, Mare Levantinum
		DB::table('seaconnections')->insert([
            'to' => '3',
            'from' => '4'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '4',
            'from' => '3'
        ]);
        //Mare Aegaeum, Mare Libycum
		DB::table('seaconnections')->insert([
            'to' => '3',
            'from' => '5'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '5',
            'from' => '3'
        ]);
        //Mare Aegaeum, Mare Ionium
		DB::table('seaconnections')->insert([
            'to' => '3',
            'from' => '6'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '6',
            'from' => '3'
        ]);
        //Mare Levantinum, Mare Libycum
		DB::table('seaconnections')->insert([
            'to' => '4',
            'from' => '5'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '5',
            'from' => '4'
        ]);
        //Mare Libycum, Mare Ionium
		DB::table('seaconnections')->insert([
            'to' => '5',
            'from' => '6'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '6',
            'from' => '5'
        ]);
        //Mare Ionium, Mare Hadriaticum
		DB::table('seaconnections')->insert([
            'to' => '6',
            'from' => '7'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '7',
            'from' => '6'
        ]);
        //Mare Ionium, Mare Tyrrhenum
		DB::table('seaconnections')->insert([
            'to' => '6',
            'from' => '8'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '8',
            'from' => '6'
        ]);
        //Mare Tyrrhenum, Mare Ligusticum
		DB::table('seaconnections')->insert([
            'to' => '8',
            'from' => '9'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '9',
            'from' => '8'
        ]);
        //Mare Tyrrhenum, Mare Sardonium
		DB::table('seaconnections')->insert([
            'to' => '8',
            'from' => '11'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '11',
            'from' => '8'
        ]);
        //Mare Ligusticum, Sinus Gallicus
		DB::table('seaconnections')->insert([
            'to' => '9',
            'from' => '10'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '10',
            'from' => '9'
        ]);
        //Mare Ligusticum, Mare Sardonium
		DB::table('seaconnections')->insert([
            'to' => '9',
            'from' => '11'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '11',
            'from' => '9'
        ]);
        //Sinus Gallicus, Mare Sardonium
		DB::table('seaconnections')->insert([
            'to' => '10',
            'from' => '11'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '11',
            'from' => '10'
        ]);
        //Mare Sardonium, Mare Balearicum
		DB::table('seaconnections')->insert([
            'to' => '11',
            'from' => '12'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '12',
            'from' => '11'
        ]);
        //Mare Sardonium, Mare Hibericum
		DB::table('seaconnections')->insert([
            'to' => '11',
            'from' => '13'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '13',
            'from' => '11'
        ]);
        //Mare Balearicum, Mare Hibericum
		DB::table('seaconnections')->insert([
            'to' => '12',
            'from' => '13'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '13',
            'from' => '12'
        ]);
        //Mare Hibericum, Oceanus Atlanticus
		DB::table('seaconnections')->insert([
            'to' => '13',
            'from' => '14'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '14',
            'from' => '13'
        ]);
        //Oceanus Atlanticus, Mare Cantabricum
		DB::table('seaconnections')->insert([
            'to' => '14',
            'from' => '15'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '15',
            'from' => '14'
        ]);
        //Mare Cantabricum, Mare Britannicum
		DB::table('seaconnections')->insert([
            'to' => '15',
            'from' => '16'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '16',
            'from' => '15'
        ]);
        //Mare Britannicum, Mare Germanicum
		DB::table('seaconnections')->insert([
            'to' => '16',
            'from' => '17'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '17',
            'from' => '16'
        ]);
        //Mare Britannicum, Mare Hibernicum
		DB::table('seaconnections')->insert([
            'to' => '16',
            'from' => '18'
        ]);
		DB::table('seaconnections')->insert([
            'to' => '18',
            'from' => '16'
        ]);

    }
}
