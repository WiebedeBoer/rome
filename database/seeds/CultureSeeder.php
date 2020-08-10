<?php

use Illuminate\Database\Seeder;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('cultures')->insert([
            'culture_name' => 'Italic',
            'culture_language' => 'Italic',
            'culture_military' => 'Italic',
            'culture_construction' => '1',
            'culture_religion' => '7'
        ]);
        //2
        DB::table('cultures')->insert([
            'culture_name' => 'Tyrsenian',
            'culture_language' => 'Tyrsenian',
            'culture_military' => 'Italic',
            'culture_construction' => '1',
            'culture_religion' => '7'
        ]);
        //3
        DB::table('cultures')->insert([
            'culture_name' => 'Gallic',
            'culture_language' => 'Celtic',
            'culture_military' => 'Gallic',
            'culture_construction' => '2',
            'culture_religion' => '2'
        ]);
        //4
        DB::table('cultures')->insert([
            'culture_name' => 'Celtic',
            'culture_language' => 'Celtic',
            'culture_military' => 'Britonic',
            'culture_construction' => '2',
            'culture_religion' => '2'
        ]);
        //5
        DB::table('cultures')->insert([
            'culture_name' => 'Celtiberian',
            'culture_language' => 'Celtic',
            'culture_military' => 'Celtiberian',
            'culture_construction' => '4',
            'culture_religion' => '2'
        ]);
        //6
        DB::table('cultures')->insert([
            'culture_name' => 'Aquitanian',
            'culture_language' => 'Aquitanian',
            'culture_military' => 'Celtiberian',
            'culture_construction' => '2',
            'culture_religion' => '2'
        ]);
        //7
        DB::table('cultures')->insert([
            'culture_name' => 'Tartessian',
            'culture_language' => 'Tartessian',
            'culture_military' => 'Celtiberian',
            'culture_construction' => '4',
            'culture_religion' => '4'
        ]);
        //8
        DB::table('cultures')->insert([
            'culture_name' => 'Iberian',
            'culture_language' => 'Iberian',
            'culture_military' => 'Celtiberian',
            'culture_construction' => '4',
            'culture_religion' => '4'
        ]);
        //9
        DB::table('cultures')->insert([
            'culture_name' => 'Germanic',
            'culture_language' => 'Germanic',
            'culture_military' => 'Germanic',
            'culture_construction' => '3',
            'culture_religion' => '6'
        ]);
        //10
        DB::table('cultures')->insert([
            'culture_name' => 'Illyrian',
            'culture_language' => 'Illyrian',
            'culture_military' => 'Illyrian',
            'culture_construction' => '7',
            'culture_religion' => '9'
        ]);
        //11
        DB::table('cultures')->insert([
            'culture_name' => 'Thracian',
            'culture_language' => 'Thracian',
            'culture_military' => 'Thracian',
            'culture_construction' => '7',
            'culture_religion' => '9'
        ]);
        //12
        DB::table('cultures')->insert([
            'culture_name' => 'Punic',
            'culture_language' => 'Punic',
            'culture_military' => 'Punic',
            'culture_construction' => '6',
            'culture_religion' => '1'
        ]);
        //13
        DB::table('cultures')->insert([
            'culture_name' => 'Numidian',
            'culture_language' => 'Numidian',
            'culture_military' => 'Numidian',
            'culture_construction' => '6',
            'culture_religion' => '5'
        ]);
        //14
        DB::table('cultures')->insert([
            'culture_name' => 'Hellenic',
            'culture_language' => 'Greek',
            'culture_military' => 'Hellenic',
            'culture_construction' => '5',
            'culture_religion' => '3'
        ]);
        //15
        DB::table('cultures')->insert([
            'culture_name' => 'Armenian',
            'culture_language' => 'Armenian',
            'culture_military' => 'Hellenic',
            'culture_construction' => '9',
            'culture_religion' => '3'
        ]);
        //16
        DB::table('cultures')->insert([
            'culture_name' => 'Kartvelian',
            'culture_language' => 'Kartvelian',
            'culture_military' => 'Pontic',
            'culture_construction' => '9',
            'culture_religion' => '3'
        ]);
        //17
        DB::table('cultures')->insert([
            'culture_name' => 'Gargarian',
            'culture_language' => 'Gargarian',
            'culture_military' => 'Pontic',
            'culture_construction' => '9',
            'culture_religion' => '3'
        ]);
        //18
        DB::table('cultures')->insert([
            'culture_name' => 'Pontic',
            'culture_language' => 'Persian',
            'culture_military' => 'Pontic',
            'culture_construction' => '9',
            'culture_religion' => '3'
        ]);
        //19
        DB::table('cultures')->insert([
            'culture_name' => 'Parthian',
            'culture_language' => 'Persian',
            'culture_military' => 'Persian',
            'culture_construction' => '9',
            'culture_religion' => '10'
        ]);
        //20
        DB::table('cultures')->insert([
            'culture_name' => 'Arabic',
            'culture_language' => 'Arabic',
            'culture_military' => 'Arabic',
            'culture_construction' => '8',
            'culture_religion' => '1'
        ]);
        //21
        DB::table('cultures')->insert([
            'culture_name' => 'Scythian',
            'culture_language' => 'Scythian',
            'culture_military' => 'Scythian',
            'culture_construction' => '10',
            'culture_religion' => '8'
        ]);
        //22
        DB::table('cultures')->insert([
            'culture_name' => 'Sarmatian',
            'culture_language' => 'Sarmatian',
            'culture_military' => 'Scythian',
            'culture_construction' => '10',
            'culture_religion' => '8'
        ]);
    }
}
