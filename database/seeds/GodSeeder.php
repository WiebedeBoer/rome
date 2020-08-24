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
        //6 (canaanite)
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
        //10
        DB::table('gods')->insert([
            'god_name' => 'Manat',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'death'    
        ]);
        //11
        DB::table('gods')->insert([
            'god_name' => 'Nabu',
            'god_gender' => 'male',
            'arts' => 'wisdom'
        ]);
        //12
        DB::table('gods')->insert([
            'god_name' => 'Ninurta',
            'god_gender' => 'male',
            'state' => 'judge',
            'agriculture' => 'farming',
            'war' => 'war',
            'healing' => 'medicine',
            'hunting' => 'hunt'
        ]);
        //13
        DB::table('gods')->insert([
            'god_name' => 'Talab',
            'god_gender' => 'male',
            'agriculture' => 'pastures'
        ]);

        //canaanite
        //14
        DB::table('gods')->insert([
            'god_name' => 'Anat',
            'god_gender' => 'female',
            'war' => 'war'
        ]);
        //15 (arabic)
        DB::table('gods')->insert([
            'god_name' => 'Baal',
            'god_gender' => 'male',
            'state' => 'king',
            'agriculture' => 'crops',
            'sea' => 'storm'
        ]);
        //16
        DB::table('gods')->insert([
            'god_name' => 'Dagon',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'agriculture' => 'crops',
            'fish' => 'fish',
            'grains' => 'grain'
        ]);
        //17
        DB::table('gods')->insert([
            'god_name' => 'Eshmun',
            'god_gender' => 'male',
            'healing' => 'medicine'
        ]);
        //18
        DB::table('gods')->insert([
            'god_name' => 'Hadad',
            'god_gender' => 'male',
            'sea' => 'storm',
            'cattle' => 'cattle'
        ]);
        //19
        DB::table('gods')->insert([
            'god_name' => 'Kothar',
            'god_gender' => 'male',
            'arts' => 'crafts',
            'timber' => 'cedar'
        ]);
        //20 (arabic)
        DB::table('gods')->insert([
            'god_name' => 'Marqod',
            'god_gender' => 'male',
            'arts' => 'dancing',
            'healing' => 'medicine'
        ]);
        //21
        DB::table('gods')->insert([
            'god_name' => 'Melqart',
            'god_gender' => 'male',
            'god_status' => 'hero',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'war' => 'axe',
            'arts' => 'gold',
            'timber' => 'cedar'
        ]);
        //22 (Libyan)
        DB::table('gods')->insert([
            'god_name' => 'Mot',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death'   
        ]);
        //23
        DB::table('gods')->insert([
            'god_name' => 'Nikkal',
            'god_gender' => 'female',
            'agriculture' => 'orchard',
            'fruit' => 'blossom'    
        ]);
        //24
        DB::table('gods')->insert([
            'god_name' => 'Qetesh',
            'god_gender' => 'female',
            'love' => 'sex',
            'lions' => 'lion'
        ]);
        //25
        DB::table('gods')->insert([
            'god_name' => 'Resheph',
            'god_gender' => 'male',
            'war' => 'war',
            'healing' => 'pestilence',
            'horses' => 'chariot',
        ]);
        //26
        DB::table('gods')->insert([
            'god_name' => 'Shadrafa',
            'god_gender' => 'male',
            'healing' => 'medicine'
        ]);
        //27
        DB::table('gods')->insert([
            'god_name' => 'Yam',
            'god_gender' => 'male',
            'sea' => 'seas'
        ]);

        //Celtic
        //28
        DB::table('gods')->insert([
            'god_name' => 'Alauna',
            'god_gender' => 'female',
            'healing' => 'medicine',
            'sea' => 'waters'
        ]);
        //29
        DB::table('gods')->insert([
            'god_name' => 'Artio',
            'god_gender' => 'female',
            'bears' => 'bear',
            'fruit' => 'fruit'
        ]);
        //30
        DB::table('gods')->insert([
            'god_name' => 'Aveta',
            'god_gender' => 'female',
            'love' => 'maternal',
            'sea' => 'waters',
            'dogs' => 'dog',
            'fruit' => 'fruit'
        ]);
        //31
        DB::table('gods')->insert([
            'god_name' => 'Belenus',
            'god_gender' => 'male',
            'state' => 'light',
            'horses' => 'chariot'
        ]);
        //32 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Belisama',
            'god_gender' => 'female',
            'arts' => 'crafts'
        ]);
        //33
        DB::table('gods')->insert([
            'god_name' => 'Borvo',
            'god_gender' => 'male',
            'arts' => 'gold',
            'sea' => 'waters',
            'healing' => 'medicine'
        ]);
        //34
        DB::table('gods')->insert([
            'god_name' => 'Camulus',
            'god_gender' => 'male',
            'war' => 'war'
        ]);
        //35 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Cernunnos',
            'god_gender' => 'male',
            'hunting' => 'hunt',
            'cattle' => 'cattle',
            'deer' => 'deer',
            'dogs' => 'dog'
        ]);
        //36
        DB::table('gods')->insert([
            'god_name' => 'Cissonius',
            'god_gender' => 'male',
            'commerce' => 'trade',
            'goats' => 'goat',
            'chickens' => 'rooster',
            'wine' => 'vines',
        ]);
        //37 (roman)
        DB::table('gods')->insert([
            'god_name' => 'Dis',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'agriculture' => 'crops',
            'arts' => 'gold'
        ]);
        //38 (iberian, roman)
        DB::table('gods')->insert([
            'god_name' => 'Epona',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'horses' => 'horse',
            'donkeys' => 'donkey',
            'grains' => 'cornucopia'
        ]);
        //39
        DB::table('gods')->insert([
            'god_name' => 'Erecura',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'grains' => 'cornucopia',
            'fruit' => 'apples'
        ]);
        //40
        DB::table('gods')->insert([
            'god_name' => 'Lenus',
            'god_gender' => 'male',
            'war' => 'war',
            'healing' => 'medicine'
        ]);
        //41
        DB::table('gods')->insert([
            'god_name' => 'Lir',
            'god_gender' => 'male',
            'sea' => 'seas'
        ]);
        //42 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Lugus',
            'god_gender' => 'male',
            'commerce' => 'trade',
            'arts' => 'crafts'
        ]);
        //43
        DB::table('gods')->insert([
            'god_name' => 'Matrona',
            'god_gender' => 'female',
            'love' => 'maternal',
            'dogs' => 'dog',
            'pigs' => 'pig',        
            'fruit' => 'fruit',
        ]);
        //44
        DB::table('gods')->insert([
            'god_name' => 'Rosmerta',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'grains' => 'cornucopia',
            'fruit' => 'apples'
        ]);
        //45
        DB::table('gods')->insert([
            'god_name' => 'Segomo',
            'god_gender' => 'male',
            'war' => 'war',
            'hunting' => 'hawk'
        ]);
        //46
        DB::table('gods')->insert([
            'god_name' => 'Sirona',
            'god_gender' => 'female',
            'healing' => 'medicine',
            'sea' => 'waters'
        ]);
        //47 (iberian)
        DB::table('gods')->insert([
            'god_name' => 'Sucellus',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'wine' => 'vines'
        ]);
        //48
        DB::table('gods')->insert([
            'god_name' => 'Toutatis',
            'god_gender' => 'male',
            'state' => 'king',
            'love' => 'protect'
        ]);

        //Greek
        //49 (roman)
        DB::table('gods')->insert([
            'god_name' => 'Apollo',
            'god_gender' => 'male',
            'state' => 'light',
            'agriculture' => 'flocks',
            'war' => 'archery',
            'arts' => 'dancing',
            'healing' => 'medicine'
        ]);
        //50
        DB::table('gods')->insert([
            'god_name' => 'Aphrodite',
            'god_gender' => 'female',
            'love' => 'sex',
            'vegetables' => 'vegetables'
        ]);
        //51 (scythian)
        DB::table('gods')->insert([
            'god_name' => 'Ares',
            'god_gender' => 'male',
            'war' => 'spear',
            'horses' => 'chariot',
            'dogs' => 'dog',
            'boars' => 'boar'
        ]);
        //52
        DB::table('gods')->insert([
            'god_name' => 'Artemis',
            'god_gender' => 'female',
            'war' => 'archery',
            'hunting' => 'hunt',
            'deer' => 'deer',
            'timber' => 'cypress'
        ]);
        //53 (roman)
        DB::table('gods')->insert([
            'god_name' => 'Asclepius',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'healing' => 'medicine'
        ]);
        //54
        DB::table('gods')->insert([
            'god_name' => 'Athena',
            'god_gender' => 'female',
            'war' => 'spear',
            'commerce' => 'weaving',
            'arts' => 'wisdom',
            'fruit' => 'olives'
        ]);
        //55
        DB::table('gods')->insert([
            'god_name' => 'Demeter',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'judge',
            'agriculture' => 'cereals',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //56
        DB::table('gods')->insert([
            'god_name' => 'Dionysus',
            'god_gender' => 'male',
            'agriculture' => 'orchard',
            'arts' => 'theatre',
            'cattle' => 'cattle',
            'goats' => 'goat',
            'wine' => 'vines',
            'fruit' => 'fruit'
        ]);
        //57
        DB::table('gods')->insert([
            'god_name' => 'Gaia',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'cattle' => 'cattle',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //58
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
        //59
        DB::table('gods')->insert([
            'god_name' => 'Hebe',
            'god_gender' => 'female',
            'state' => 'mercy',
            'honey' => 'honey'
        ]);
        //60 (thraco illyrian)
        DB::table('gods')->insert([
            'god_name' => 'Hecate',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'love' => 'household',
            'commerce' => 'weaving',
            'arts' => 'cloak',
            'fish' => 'fish',
            'dogs' => 'dog'
        ]);
        //61
        DB::table('gods')->insert([
            'god_name' => 'Hephaestus',
            'god_gender' => 'male',
            'state' => 'fire',
            'commerce' => 'metalwork',
            'arts' => 'crafts'
        ]);
        //62
        DB::table('gods')->insert([
            'god_name' => 'Hera',
            'god_gender' => 'female',
            'love' => 'maternal',
            'horses' => 'chariot',
            'cattle' => 'cattle',
            'lions' => 'lion',
            'fruit' => 'pomegranates'
        ]);
        //63 (roman)
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
        //64
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
        //65
        DB::table('gods')->insert([
            'god_name' => 'Hestia',
            'god_gender' => 'female',
            'state' => 'fire',
            'love' => 'household'
        ]);
        //66
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
        //67
        DB::table('gods')->insert([
            'god_name' => 'Pan',
            'god_gender' => 'male',
            'agriculture' => 'flocks',
            'love' => 'sex',
            'arts' => 'dancing',
            'goats' => 'goat'
        ]);
        //68
        DB::table('gods')->insert([
            'god_name' => 'Poseidon',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'sea' => 'seas',
            'horses' => 'horse'
        ]);
        //69
        DB::table('gods')->insert([
            'god_name' => 'Zeus',
            'god_gender' => 'male',
            'state' => 'king',
            'hunting' => 'hawk',
            'cattle' => 'cattle',
            'timber' => 'oak'
        ]);

        //Iberian
        //70
        DB::table('gods')->insert([
            'god_name' => 'Ataegina',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'goats' => 'goat',
        ]);
        //71
        DB::table('gods')->insert([
            'god_name' => 'Coventina',
            'god_gender' => 'female',
            'commerce' => 'prosperity',
            'sea' => 'waters'
        ]);
        //72
        DB::table('gods')->insert([
            'god_name' => 'Duberdicus',
            'god_gender' => 'male',
            'sea' => 'waters',
            'hunting' => 'mountains'
        ]);
        //73
        DB::table('gods')->insert([
            'god_name' => 'Endovelicus',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'healing' => 'medicine'
        ]);
        //74
        DB::table('gods')->insert([
            'god_name' => 'Mari',
            'god_gender' => 'female',
            'love' => 'maternal',
            'sea' => 'storm',
        ]);
        //75
        DB::table('gods')->insert([
            'god_name' => 'Neto',
            'god_gender' => 'male',
            'state' => 'light',
            'war' => 'war'
        ]);
        //76
        DB::table('gods')->insert([
            'god_name' => 'Reo',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'king',
            'cattle' => 'cattle',
            'sheep' => 'sheep'
        ]);

        //Libyan
        //77
        DB::table('gods')->insert([
            'god_name' => 'Afri',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'love' => 'sex'
        ]);
        //78
        DB::table('gods')->insert([
            'god_name' => 'Amun',
            'god_gender' => 'male',
            'state' => 'light',
            'agriculture' => 'crops',
            'sheep' => 'sheep'
        ]);
        //79
        DB::table('gods')->insert([
            'god_name' => 'Amunet',
            'god_gender' => 'female',
            'state' => 'judge',
            'agriculture' => 'crops',
            'arts' => 'wisdom'    
        ]);
        //80
        DB::table('gods')->insert([
            'god_name' => 'Anqet',
            'god_gender' => 'female',
            'war' => 'archery',
            'sea' => 'waters',
            'healing' => 'yes',
            'deer' => 'deer'
        ]);
        //81
        DB::table('gods')->insert([
            'god_name' => 'Awessu',
            'god_gender' => 'male',
            'sea' => 'seas'
        ]); 
        //82
        DB::table('gods')->insert([
            'god_name' => 'Gurzil',
            'god_gender' => 'male',
            'state' => 'light',
            'war' => 'war'
        ]);
        //83
        DB::table('gods')->insert([
            'god_name' => 'Isis',
            'god_gender' => 'female',
            'state' => 'light',
            'love' => 'maternal',
            'arts' => 'wisdom',
            'ducks' => 'duck'
        ]);      
        //84
        DB::table('gods')->insert([
            'god_name' => 'Mastinam',
            'god_gender' => 'male',
            'state' => 'king'
        ]);
        //85
        DB::table('gods')->insert([
            'god_name' => 'Seth',
            'god_gender' => 'male',
            'war' => 'war',
            'sea' => 'storm',
            'donkeys' => 'donkey'
        ]);
        //86 (canaanite)
        DB::table('gods')->insert([
            'god_name' => 'Tanit',
            'god_gender' => 'female',
            'commerce' => 'weaving'
        ]);

        //Norse
        //87
        DB::table('gods')->insert([
            'god_name' => 'Aegir',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'state' => 'fire',
            'sea' => 'seas'
        ]);
        //88
        DB::table('gods')->insert([
            'god_name' => 'Eir',
            'god_gender' => 'female',
            'state' => 'mercy',
            'love' => 'maternal',
            'healing' => 'medicine',
            'hunting' => 'mountains'
        ]);
        //89
        DB::table('gods')->insert([
            'god_name' => 'Freia',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'war' => 'war',
            'love' => 'sex',
            'arts' => 'gold',
            'boars' => 'boar',
            'honey' => 'honey'
        ]);
        //90
        DB::table('gods')->insert([
            'god_name' => 'Freyr',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'king',
            'agriculture' => 'crops',
            'war' => 'sword',
            'deer' => 'deer',
            'honey' => 'honey'
        ]);
        //91
        DB::table('gods')->insert([
            'god_name' => 'Fosite',
            'god_gender' => 'male',
            'state' => 'judge',
            'arts' => 'gold',
            'sea' => 'seas'
        ]);
        //92
        DB::table('gods')->insert([
            'god_name' => 'Frigg',
            'god_gender' => 'female',
            'agriculture' => 'flocks',
            'arts' => 'wisdom',
            'healing' => 'medicine',
            'horses' => 'horse'
        ]);
        //93
        DB::table('gods')->insert([
            'god_name' => 'Nerthus',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'cattle' => 'cattle',
            'timber' => 'oak'
        ]);
        //94
        DB::table('gods')->insert([
            'god_name' => 'Njord',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'sea' => 'seas',
            'fish' => 'fish'
        ]);
        //95
        DB::table('gods')->insert([
            'god_name' => 'Odin',
            'god_gender' => 'male',
            'state' => 'death',
            'war' => 'war',
            'arts' => 'wisdom',
            'healing' => 'medicine',
            'hunting' => 'hawk',
            'dogs' => 'dog'
        ]);
        //96
        DB::table('gods')->insert([
            'god_name' => 'Ullr',
            'god_gender' => 'male',
            'war' => 'archery',
        ]);
        //97
        DB::table('gods')->insert([
            'god_name' => 'Thor',
            'god_gender' => 'male',
            'state' => 'king',
            'war' => 'hammer',
            'sea' => 'storm',
            'timber' => 'oak'
        ]);

        //Roman
        //98
        DB::table('gods')->insert([
            'god_name' => 'Bacchus',
            'god_gender' => 'male',
            'agriculture' => 'orchard',
            'arts' => 'theatre',
            'cattle' => 'cattle',
            'goats' => 'goat',
            'wine' => 'vines',
            'fruit' => 'fruit'
        ]);
        //99
        DB::table('gods')->insert([
            'god_name' => 'Bellona',
            'god_gender' => 'female',
            'war' => 'sword',
            'horses' => 'chariot'
        ]);
        //100
        DB::table('gods')->insert([
            'god_name' => 'Ceres',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'judge',
            'agriculture' => 'cereals',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //101
        DB::table('gods')->insert([
            'god_name' => 'Diana',
            'god_gender' => 'female',
            'war' => 'archery',
            'love' => 'maternal',
            'hunting' => 'hunt',
            'deer' => 'deer',
            'timber' => 'cypress'
        ]);
        //102
        DB::table('gods')->insert([
            'god_name' => 'Faunus',
            'god_gender' => 'male',
            'agriculture' => 'pastures',
            'love' => 'sex',
            'arts' => 'dancing',
            'cattle' => 'cattle',
            'timber' => 'oak'
        ]);
        //103
        DB::table('gods')->insert([
            'god_name' => 'Juno',
            'god_gender' => 'female',
            'state' => 'judge',
            'war' => 'spear',
            'love' => 'maternal',            
            'goats' => 'goat',
            'fruit' => 'figs'
        ]);
        //104
        DB::table('gods')->insert([
            'god_name' => 'Jupiter',
            'god_gender' => 'male',
            'state' => 'king',
            'hunting' => 'hawk',
            'cattle' => 'cattle',
            'timber' => 'oak'
        ]);
        //105
        DB::table('gods')->insert([
            'god_name' => 'Mars',
            'god_gender' => 'male',
            'war' => 'spear',
            'horses' => 'chariot',
            'dogs' => 'dog',
            'boars' => 'boar'
        ]);
        //106
        DB::table('gods')->insert([
            'god_name' => 'Mercurius',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'agriculture' => 'flocks',
            'commerce' => 'trade',
            'arts' => 'cloak',
            'goats' => 'goat',
            'chickens' => 'rooster'
        ]);
        //107
        DB::table('gods')->insert([
            'god_name' => 'Minerva',
            'god_gender' => 'female',
            'war' => 'spear',
            'commerce' => 'weaving',
            'arts' => 'wisdom',
            'fruit' => 'olives'
        ]);
        //108
        DB::table('gods')->insert([
            'god_name' => 'Neptunus',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'sea' => 'seas',
            'horses' => 'horse'
        ]);
        //109
        DB::table('gods')->insert([
            'god_name' => 'Ops',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'commerce' => 'prosperity',
            'lions' => 'lion',
            'grains' => 'cornucopia'
        ]);
        //110
        DB::table('gods')->insert([
            'god_name' => 'Pomona',
            'god_gender' => 'female',
            'agriculture' => 'orchard',
            'commerce' => 'prosperity',
            'fruit' => 'fruit'
        ]);
        //111
        DB::table('gods')->insert([
            'god_name' => 'Proserpina',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'agriculture' => 'crops',
            'deer' => 'deer',
            'grains' => 'grain',
            'wine' => 'vines',
            'fruit' => 'pomegranates'
        ]);
        //112
        DB::table('gods')->insert([
            'god_name' => 'Saturnus',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'war' => 'bounty',
            'commerce' => 'prosperity',
        ]);
        //113
        DB::table('gods')->insert([
            'god_name' => 'Terra',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'cattle' => 'cattle',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //114
        DB::table('gods')->insert([
            'god_name' => 'Venus',
            'god_gender' => 'female',
            'love' => 'sex',
            'vegetables' => 'vegetables'
        ]);
        //115
        DB::table('gods')->insert([
            'god_name' => 'Vesta',
            'god_gender' => 'female',
            'state' => 'fire',
            'love' => 'household'
        ]);
        //116
        DB::table('gods')->insert([
            'god_name' => 'Vulcan',
            'god_gender' => 'male',
		    'state' => 'fire',
            'commerce' => 'metalwork',
            'arts' => 'crafts'
        ]);

        //Scythian
        //117
        DB::table('gods')->insert([
            'god_name' => 'Alardy',
            'god_gender' => 'male',
            'healing' => 'pestilence'
        ]);
        //118
        DB::table('gods')->insert([
            'god_name' => 'Aminon',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death'
        ]);
        //119
        DB::table('gods')->insert([
            'god_name' => 'Api',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'cattle' => 'cattle',
            'grains' => 'cornucopia',
            'fruit' => 'fruit'
        ]);
        //120
        DB::table('gods')->insert([
            'god_name' => 'Argimpasa',
            'god_gender' => 'female',
            'love' => 'sex',
            'vegetables' => 'vegetables'
        ]);
        //121 (georgian)
        DB::table('gods')->insert([
            'god_name' => 'Avsati',
            'god_gender' => 'male',
            'hunting' => 'hunt',
            'pheasants' => 'pheasant'
        ]);
        //122
        DB::table('gods')->insert([
            'god_name' => 'Dzerassae',
            'god_gender' => 'female',
            'love' => 'maternal',
            'sea' => 'waters'
        ]);
        //123
        DB::table('gods')->insert([
            'god_name' => 'Faelvaera',
            'god_gender' => 'male',
            'agriculture' => 'flocks',
            'sheep' => 'sheep'
        ]);  
        //124
        DB::table('gods')->insert([
            'god_name' => 'Kurdalaegon',
            'god_gender' => 'male',
            'state' => 'fire',
            'commerce' => 'metalwork',
            'arts' => 'crafts'
        ]);
        //125
        DB::table('gods')->insert([
            'god_name' => 'Oitosyros',
            'god_gender' => 'male',
            'state' => 'light',
            'agriculture' => 'flocks',
            'war' => 'archery',
            'arts' => 'dancing',
            'healing' => 'medicine'
        ]);
        //126
        DB::table('gods')->insert([
            'god_name' => 'Papaios',
            'god_gender' => 'male',
            'state' => 'king',
            'hunting' => 'hawk',
            'cattle' => 'cattle'
        ]);
        //127
        DB::table('gods')->insert([
            'god_name' => 'Satanaya',
            'god_gender' => 'female',
            'state' => 'light',
            'agriculture' => 'crops',
            'fruit' => 'blossom'
        ]);
        //128
        DB::table('gods')->insert([
            'god_name' => 'Tabiti',
            'god_gender' => 'female',
            'state' => 'fire',
            'love' => 'household'
        ]);
        //129
        DB::table('gods')->insert([
            'god_name' => 'Targitaos',
            'god_gender' => 'male',
            'sea' => 'storm',
            'cattle' => 'cattle'
        ]);
        //130
        DB::table('gods')->insert([
            'god_name' => 'Thagimasidas',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'sea' => 'seas',
            'horses' => 'horse'
        ]);
        //131
        DB::table('gods')->insert([
            'god_name' => 'Uacilla',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'sea' => 'storm'
        ]);     

        //Thraco Illyrian
        //132
        DB::table('gods')->insert([
            'god_name' => 'Anzotica',
            'god_gender' => 'female',
            'love' => 'sex',
            'vegetables' => 'vegetables'
        ]);
        //133
        DB::table('gods')->insert([
            'god_name' => 'Armatus',
            'god_gender' => 'male',
            'war' => 'yes',
            'horses' => 'horse'
        ]);
        //134
        DB::table('gods')->insert([
            'god_name' => 'Bendis',
            'god_gender' => 'female',
            'arts' => 'dancing',
            'hunting' => 'hunt'
        ]);
        //135
        DB::table('gods')->insert([
            'god_name' => 'Bindus',
            'god_gender' => 'male',
            'god_realm' => 'maritime',
            'sea' => 'seas',
            'horses' => 'horse'
        ]);
        //136
        DB::table('gods')->insert([
            'god_name' => 'Derzelas',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death',
            'commerce' => 'prosperity',
            'healing' => 'medicine',
            'grains' => 'cornucopia'
        ]);
        //137
        DB::table('gods')->insert([
            'god_name' => 'Kotys',
            'god_gender' => 'male',
            'war' => 'war',
            'love' => 'sex',
            'healing' => 'medicine'
        ]);
        //138
        DB::table('gods')->insert([
            'god_name' => 'Sabazios',
            'god_gender' => 'male',
            'state' => 'king',
            'horses' => 'horse'
        ]);
        //139
        DB::table('gods')->insert([
            'god_name' => 'Semele',
            'god_gender' => 'female',
            'god_realm' => 'chthonic',
            'agriculture' => 'crops',
            'wine' => 'vines'
        ]);
        //140
        DB::table('gods')->insert([
            'god_name' => 'Silenus',
            'god_gender' => 'male',
            'horses' => 'horse',
            'wine' => 'vines'
        ]);
        //141
        DB::table('gods')->insert([
            'god_name' => 'Silvanus',
            'god_gender' => 'male',
            'agriculture' => 'flocks',
            'love' => 'sex',
            'arts' => 'dancing',
            'goats' => 'goat',
            'ducks' => 'duck'
        ]);
        //142
        DB::table('gods')->insert([
            'god_name' => 'Zalmoxis',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'war' => 'axe',
            'commerce' => 'prosperity'
        ]);
        //143
        DB::table('gods')->insert([
            'god_name' => 'Zibelthiurdos',
            'god_gender' => 'male',
            'state' => 'light',
            'sea' => 'storm'
        ]);

        //Georgian
        //144
        DB::table('gods')->insert([
            'god_name' => 'Adgilis',
            'god_gender' => 'male',
            'love' => 'maternal',
            'agriculture' => 'crops',
            'cattle' => 'cattle'
        ]);
        //145
        DB::table('gods')->insert([
            'god_name' => 'Armazi',
            'god_gender' => 'male',
            'state' => 'king',
            'commerce' => 'prosperity',
            'arts' => 'gold'
        ]);
        //146
        DB::table('gods')->insert([
            'god_name' => 'Barbale',
            'god_gender' => 'female',
            'healing' => 'medicine'
        ]);
        //147
        DB::table('gods')->insert([
            'god_name' => 'Dali',
            'god_gender' => 'female',
            'love' => 'sex',
            'arts' => 'gold',
            'hunting' => 'yes',
            'goats' => 'goat',
            'deer' => 'deer'
        ]);
        //148
        DB::table('gods')->insert([
            'god_name' => 'Lamaria',
            'god_gender' => 'female',
            'state' => 'fire',
            'love' => 'maternal',
            'arts' => 'dancing',
            'cattle' => 'cattle',
            'honey' => 'honey',
        ]);
        //149
        DB::table('gods')->insert([
            'god_name' => 'Pirkusha',
            'god_gender' => 'male',
            'state' => 'fire',
            'commerce' => 'metalwork',
            'arts' => 'crafts'
        ]);
        //150
        DB::table('gods')->insert([
            'god_name' => 'Samdzimari',
            'god_gender' => 'female',
            'agriculture' => 'crops',
            'love' => 'sex',
            'arts' => 'gold',
            'cattle' => 'cattle'
        ]);
        //151
        DB::table('gods')->insert([
            'god_name' => 'Tamar',
            'god_gender' => 'female',
            'sea' => 'storm'
        ]);
        //152
        DB::table('gods')->insert([
            'god_name' => 'Tevdore',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'horses' => 'horse'
        ]);
        //153
        DB::table('gods')->insert([
            'god_name' => 'Zaden',
            'god_gender' => 'male',
            'commerce' => 'prosperity'
        ]);

        //monotheistic

        //Zoroastrianism
        //154
        DB::table('gods')->insert([
            'god_name' => 'Hormazd',
            'god_gender' => 'male',
            'god_category' => 'henotheistic',
            'state' => 'creator',
            'arts' => 'wisdom',
            'horses' => 'chariot'      
        ]);
        //155
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
        //156
        DB::table('gods')->insert([
            'god_name' => 'Anahita',
            'god_gender' => 'female',
            'god_category' => 'henotheistic',
            'god_status' => 'spirit',
            'agriculture' => 'crops',
            'arts' => 'wisdom',            
            'sea' => 'waters',
            'healing' => 'medicine',
            'horses' => 'horse',
            'cattle' => 'cattle',
            'sheep' => 'sheep',
            'goats' => 'goat'
        ]);

        //Hellenic Judaism
        //157
        DB::table('gods')->insert([
            'god_name' => 'Yahweh',
            'god_gender' => 'male',
            'god_category' => 'monotheistic',
            'state' => 'creator'
        ]);

        //Armenian Polytheism
        //158
        DB::table('gods')->insert([
            'god_name' => 'Areg',
            'god_gender' => 'male',
            'state' => 'light'
        ]);
        //159
        DB::table('gods')->insert([
            'god_name' => 'Astlik',
            'god_gender' => 'female',
            'state' => 'judge',
            'war' => 'war',
            'love' => 'sex'
        ]);
        //160
        DB::table('gods')->insert([
            'god_name' => 'Amanor',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'fruit' => 'fruit'
        ]);
        //161
        DB::table('gods')->insert([
            'god_name' => 'Angel',
            'god_gender' => 'male',
            'god_realm' => 'chthonic',
            'state' => 'death'
        ]);
        //162
        DB::table('gods')->insert([
            'god_name' => 'Vanatur',
            'god_gender' => 'male',
            'state' => 'king',
            'fruit' => 'fruit'
        ]);
        //163
        DB::table('gods')->insert([
            'god_name' => 'Nvard',
            'god_gender' => 'male',
            'agriculture' => 'crops',
            'sea' => 'waters',
            'horses' => 'horse',
            'cattle' => 'cattle',
            'sheep' => 'sheep',
            'goats' => 'goat'
        ]);
        //163
        DB::table('gods')->insert([
            'god_name' => 'Tsovinar',
            'god_gender' => 'female',
            'sea' => 'seas'
        ]);

    }
}
