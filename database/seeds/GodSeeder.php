<?php

use Illuminate\Database\Seeder;

class GodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //major gods

        //Arabic
        //1
        DB::table('gods')->insert([
            'god_name' => 'Abgal',
            'god_gender' => 'male',
            'god_status' => 'hero',
            'war' => 'lance',
            'horses' => 'horses'
        ]);
        //2
        DB::table('gods')->insert([
            'god_name' => 'Allat',
            'god_gender' => 'female',
            'war' => 'war',
            'commerce' => 'prosperity',
            'lions' => 'lion',
            'deer' => 'deer'
        ]);
        //3
        DB::table('gods')->insert([
            'god_name' => 'Almaqah',
            'god_gender' => 'male',
            'state' => 'light',
            'war' => 'sword',
            'cattle' => 'cattle',
            'wine' => 'vines'
        ]);
        //4
        DB::table('gods')->insert([
            'god_name' => 'Aluzza',
            'god_gender' => 'female',
            'love' => 'protect'
        ]);
        //5
        DB::table('gods')->insert([
            'god_name' => 'Asherah',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'sea' => 'seas'
        ]);
        //6 (punic)
        DB::table('gods')->insert([
            'god_name' => 'Astarte',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'war' => 'war',
            'love' => 'sex',
            'horses' => 'horse',
            'lions' => 'lion'
        ]);
        //7
        DB::table('gods')->insert([
            'god_name' => 'Basamum',
            'god_gender' => 'male',
            'healing' => 'medicine',
            'goats' => 'goat'
        ]);
        //8
        DB::table('gods')->insert([
            'god_name' => 'Dushara',
            'god_gender' => 'male',
            'commerce' => 'trade',
            'wine' => 'vines'
        ]);
        //9
        DB::table('gods')->insert([
            'god_name' => 'Haukim',
            'god_gender' => 'male',
            'state' => 'judge'
        ]);
        //9
        DB::table('gods')->insert([
            'god_name' => 'Manat',
            'god_gender' => 'female',
            'gold_realm' => 'chthonic',
            'state' => 'death'    
        ]);
        //10
        DB::table('gods')->insert([
            'god_name' => 'Nabu',
            'god_gender' => 'male',
            'arts' => 'wisdom'
        ]);
        //11
        DB::table('gods')->insert([
            'god_name' => 'Ninurta',
            'god_gender' => 'male',
            'state' => 'judge',
            'agriculture' => 'farming',
            'war' => 'war',
            'healing' => 'medicine',
            'hunting' => 'hunt'
        ]);
        //12
        DB::table('gods')->insert([
            'god_name' => 'Talab',
            'god_gender' => 'male',
            'agriculture' => 'pastures'
        ]);

        //canaanite
        //13
        DB::table('gods')->insert([
            'god_name' => 'Anat',
            'god_gender' => 'female',
            'war' => 'war'
        ]);
        //14
        DB::table('gods')->insert([
            'god_name' => 'Baal',
            'god_gender' => 'male',
            'state' => 'king',
            'agriculture' => 'crops',
            'sea' => 'storm'
        ]);
        //15
        DB::table('gods')->insert([
            'god_name' => 'Dagon',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'agriculture' => 'crops',
            'fish' => 'fish',
            'grain' => 'grain'
        ]);
        //16
        DB::table('gods')->insert([
            'god_name' => 'Eshmun',
            'god_gender' => 'male',
            'healing' => 'medicine'
        ]);
        //17
        DB::table('gods')->insert([
            'god_name' => 'Hadad',
            'god_gender' => 'male',
            'sea' => 'storm',
            'cattle' => 'cattle'
        ]);
        //18
        DB::table('gods')->insert([
            'god_name' => 'Kothar',
            'god_gender' => 'male',
            'arts' => 'crafts',
            'timber' => 'cedar'
        ]);
        //19
        DB::table('gods')->insert([
            'god_name' => 'Marqod',
            'god_gender' => 'male',
            'arts' => 'dancing',
            'healing' => 'medicine'
        ]);
        //20
        DB::table('gods')->insert([
            'god_name' => 'Melqart',
            'god_gender' => 'male',
            'god_status' => 'hero',
            'gold_realm' => 'chthonic',
            'state' => 'death',
            'war' => 'axe',
            'arts' => 'gold',
            'timber' => 'cedar'
        ]);
        //21
        DB::table('gods')->insert([
            'god_name' => 'Mot',
            'god_gender' => 'male',
            'gold_realm' => 'chthonic',
            'state' => 'death'   
        ]);
        //22
        DB::table('gods')->insert([
            'god_name' => 'Nikkal',
            'god_gender' => 'female',
            'agriculture' => 'orchard',
            'fruit' => 'blossom'    
        ]);
        //23
        DB::table('gods')->insert([
            'god_name' => 'Qetesh',
            'god_gender' => 'female',
            'love' => 'sex',
            'lions' => 'lion'
        ]);
        //24
        DB::table('gods')->insert([
            'god_name' => 'Resheph',
            'god_gender' => 'male',
            'war' => 'war',
            'healing' => 'pestilence',
            'horses' => 'chariot',
        ]);
        //25
        DB::table('gods')->insert([
            'god_name' => 'Shadrafa',
            'god_gender' => 'male',
            'healing' => 'medicine'
        ]);
        //26
        DB::table('gods')->insert([
            'god_name' => 'Yam',
            'god_gender' => 'male',
            'sea' => 'seas'
        ]);

        //Celtic
        //27
        DB::table('gods')->insert([
            'god_name' => 'Alauna',
            'god_gender' => 'female',
            'healing' => 'medicine',
            'sea' => 'waters'
        ]);
        //28
        DB::table('gods')->insert([
            'god_name' => 'Artio',
            'god_gender' => 'female',
            'bears' => 'bear',
            'fruit' => 'fruit'
        ]);
        //29
        DB::table('gods')->insert([
            'god_name' => 'Aveta',
            'god_gender' => 'female',
            'love' => 'maternal',
            'sea' => 'waters',
            'dogs' => 'dog',
            'fruit' => 'fruit'
        ]);
        //30
        DB::table('gods')->insert([
            'god_name' => 'Belenus',
            'god_gender' => 'male',
            'state' => 'light',
            'horses' => 'chariot'
        ]);
        //31 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Belisama',
            'god_gender' => 'female',
            'arts' => 'crafts'
        ]);
        //32
        DB::table('gods')->insert([
            'god_name' => 'Borvo',
            'god_gender' => 'male',
            'arts' => 'gold',
            'sea' => 'waters',
            'healing' => 'medicine'
        ]);
        //33
        DB::table('gods')->insert([
            'god_name' => 'Camulus',
            'god_gender' => 'male',
            'war' => 'war'
        ]);
        //34
        DB::table('gods')->insert([
            'god_name' => 'Cernunnos',
            'god_gender' => 'male',
            'hunting' => 'hunt',
            'cattle' => 'cattle',
            'deer' => 'deer',
            'dogs' => 'dog'
        ]);
        //35
        DB::table('gods')->insert([
            'god_name' => 'Cissonius',
            'god_gender' => 'male',
            'commerce' => 'trade',
            'goats' => 'goat',
            'chickens' => 'rooster',
            'wine' => 'vines',
        ]);
        //36 (roman)
        DB::table('gods')->insert([
            'god_name' => 'Dis',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'agriculture' => 'crops',
            'arts' => 'gold'
        ]);
        //37
        DB::table('gods')->insert([
            'god_name' => 'Epona',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'horses' => 'horse',
            'donkeys' => 'donkey',
            'grains' => 'cornucopia'
        ]);
        //38
        DB::table('gods')->insert([
            'god_name' => 'Erecura',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'grains' => 'cornucopia',
            'fruit' => 'apples'
        ]);
        //39
        DB::table('gods')->insert([
            'god_name' => 'Lenus',
            'god_gender' => 'male',
            'war' => 'war',
            'healing' => 'medicine'
        ]);
        //40
        DB::table('gods')->insert([
            'god_name' => 'Lir',
            'god_gender' => 'male',
            'sea' => 'seas'
        ]);
        //41 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Lugus',
            'god_gender' => 'male',
            'commerce' => 'trade',
            'arts' => 'crafts'
        ]);
        //42
        DB::table('gods')->insert([
            'god_name' => 'Matrona',
            'god_gender' => 'female',
            'love' => 'maternal',
            'dogs' => 'dog',
            'pigs' => 'pig',        
            'fruit' => 'fruit',
        ]);
        //43
        DB::table('gods')->insert([
            'god_name' => 'Rosmerta',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'grains' => 'cornucopia',
            'fruit' => 'apples'
        ]);
        //44
        DB::table('gods')->insert([
            'god_name' => 'Segomo',
            'god_gender' => 'male',
            'war' => 'war',
            'hunting' => 'hawk'
        ]);
        //45
        DB::table('gods')->insert([
            'god_name' => 'Sirona',
            'god_gender' => 'female',
            'healing' => 'medicine',
            'sea' => 'waters'
        ]);
        //46 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Sucellus',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'wine' => 'vines'
        ]);
        //47
        DB::table('gods')->insert([
            'god_name' => 'Toutatis',
            'god_gender' => 'male',
            'state' => 'king',
            'love' => 'protect'
        ]);

        //Greek
        // (roman)
        DB::table('gods')->insert([
            'god_name' => 'Apollo',
            'god_gender' => 'male',
            'state' => 'light',
            'agriculture' => 'flocks',
            'war' => 'archery',
            'arts' => 'dancing',
            'healing' => 'medicine'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Aphrodite',
            'god_gender' => 'female',
            'love' => 'sex',
            'vegetables' => 'vegetables'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Ares',
            'god_gender' => 'male',
            'war' => 'spear',
            'horses' => 'chariot',
            'dogs' => 'dog',
            'boars' => 'boar',
            'war' => 'spear'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Artemis',
            'god_gender' => 'female',
            'war' => 'archery',
            'hunting' => 'hunt',
            'deer' => 'deer',
            'timber' => 'cypress'
        ]);
        // (roman)
        DB::table('gods')->insert([
            'god_name' => 'Asclepius',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'healing' => 'medicine'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Athena',
            'god_gender' => 'female',
            'war' => 'spear',
            'commerce' => 'weaving',
            'arts' => 'wisdom',
            'fruit' => 'olives'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Demeter',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'judge',
            'agriculture' => 'cereals',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Dionysus',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Gaia',
            'god_gender' => 'female',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hades',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'horses' => 'chariot',
            'cattle' => 'cattle',
            'sheep' => 'sheep',
            'dogs' => 'dog',
            'grains' => 'cornucopia',
            'timber' => 'cypress'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hebe',
            'god_gender' => 'female',
            'state' => 'mercy',
            'honey' => 'honey'
        ]);
        // (thraco illyrian)
        DB::table('gods')->insert([
            'god_name' => 'Hecate',
            'god_gender' => 'female',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hephaestus',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hera',
            'god_gender' => 'female',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Heracles',
            'god_gender' => 'male',
            'god_status' => 'hero',
            'god_realm' => 'chthonic',
            'war' => 'club',
            'love' => 'protect',
            'cattle' => 'cattle',
            'lions' => 'lion',
            'boars' => 'boar'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hermes',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'agriculture' => 'flocks',
            'commerce' => 'trade',
            'arts' => 'cloak',
            'goats' => 'goat',
            'chickens' => 'rooster'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hestia',
            'god_gender' => 'female',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Persephone',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'agriculture' => 'crops',
            'deer' => 'deer',
            'grains' => 'grain',
            'fruit' => 'pomegranates'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Pan',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Poseidon',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'sea' => 'seas',
            'horses' => 'horse'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Zeus',
            'god_gender' => 'male',
            'state' => 'king',
            'hunting' => 'hawk',
            'cattle' => 'cattle',
            'timber' => 'oak'
        ]);

        //Iberian
        //
        DB::table('gods')->insert([
            'god_name' => 'Reo',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Ataegina',
            'god_gender' => 'female',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Neto',
            'god_gender' => 'male',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => '',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => '',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => '',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Duberdicus',
            'god_gender' => 'male',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Endovelicus',
            'god_gender' => 'male',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Cernunnos',
            'god_gender' => 'male',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);


        //Libyan
        //
        DB::table('gods')->insert([
            'god_name' => 'Mastinam',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Amun',
            'god_gender' => 'male',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Neith',
            'god_gender' => 'female',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Afri',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Tanit',
            'god_gender' => 'female',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Isis',
            'god_gender' => 'female',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Awessu',
            'god_gender' => 'male',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Anqet',
            'god_gender' => 'female',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Neith',
            'god_gender' => 'female',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);


        //Norse
        //
        DB::table('gods')->insert([
            'god_name' => 'Thor',
            'god_gender' => '',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Fulla',
            'god_gender' => 'female',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Odin',
            'god_gender' => '',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Freia',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Wodan',
            'god_gender' => '',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Niorun',
            'god_gender' => '',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Aegir',
            'god_gender' => '',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Eir',
            'god_gender' => 'female',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => '',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);


        //Roman
        //
        DB::table('gods')->insert([
            'god_name' => 'Jupiter',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Ceres',
            'god_gender' => 'female',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Mars',
            'god_gender' => 'male',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Venus',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Mercurius',
            'god_gender' => 'male',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Minerva',
            'god_gender' => 'female',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Neptunus',
            'god_gender' => 'male',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => '',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Diana',
            'god_gender' => 'female',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);


        //Scythian
        //
        DB::table('gods')->insert([
            'god_name' => 'Papaios',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Satanaya',
            'god_gender' => 'female',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Agin',
            'god_gender' => 'male',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Argimpasa',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Uastyrdzhi',
            'god_gender' => 'male',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Tabiti',
            'god_gender' => 'female',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Thagimasidas',
            'god_gender' => 'male',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Oitosyros',
            'god_gender' => 'male',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Api',
            'god_gender' => 'female',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);      

        //Thraco Illyrian
        //
        DB::table('gods')->insert([
            'god_name' => 'Sabazios',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Zemele',
            'god_gender' => 'female',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Armatus',
            'god_gender' => 'male',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Anzotica',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Zalmoxis',
            'god_gender' => 'male',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Hecate',
            'god_gender' => 'female',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Bindus',
            'god_gender' => 'male',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Derzelas',
            'god_gender' => 'male',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Bendis',
            'god_gender' => 'female',
            'hunting' => 'yes'
        ]);

        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);

        //Georgian
        //
        DB::table('gods')->insert([
            'god_name' => 'Armazi',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Tevdore',
            'god_gender' => 'male',
            'agriculture' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Kopala',
            'god_gender' => 'male',
            'war' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Samdzimari',
            'god_gender' => 'female',
            'love' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Zaden',
            'god_gender' => 'male',
            'commerce' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Lamaria',
            'god_gender' => 'female',
            'arts' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Leucothenia',
            'god_gender' => 'female',
            'sea' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Barbale',
            'god_gender' => 'female',
            'healing' => 'yes'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Dali',
            'god_gender' => 'female',
            'hunting' => 'yes'
        ]);

        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => '',
            'god_gender' => 'male',
        ]);



        //monotheistic

        //Zoroastrianism
        //
        DB::table('gods')->insert([
            'god_name' => 'Hormazd',
            'god_gender' => 'male',
            'god_category' => 'henotheistic',
            'state' => 'creator',
            'horses' => 'chariot'      
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Mithra',
            'god_gender' => 'male',
            'god_category' => 'henotheistic',
            'god_status' => 'spirit',
            'state' => 'light',
            'agriculture' => 'crops',
            'sea' => 'waters',
            'cattle' => 'cattle'
        ]);
        //
        DB::table('gods')->insert([
            'god_name' => 'Anahita',
            'god_gender' => 'female',
            'god_category' => 'henotheistic',
            'god_status' => 'spirit',
            'agriculture' => 'crops',
            'sea' => 'waters',
            'camels' => 'herd',
            'horses' => 'herd',
            'cattle' => 'herd',
            'sheep' => 'herd',
            'goats' => 'herd'
        ]);

        //Hellenic Judaism
        //
        DB::table('gods')->insert([
            'god_name' => 'Yahweh',
            'god_gender' => 'male',
            'god_category' => 'monotheistic',
            'state' => 'creator'
        ]);

    }
}
