<?php

use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('religions')->insert([
            'religion_name' => 'Arabic Polytheism',
            'state' => 'Baal',
            'agriculture' => 'Dagon',
            'war' => 'Anat',
            'love' => 'Aluzza',
            'commerce' => 'Sakkun',
            'arts' => 'Kothar',
            'sea' => 'Yam',
            'healing' => 'Eshmun',
            'hunting' => 'Ninurta',

        ]);
        //2
        DB::table('religions')->insert([
            'religion_name' => 'Celtic Polytheism',
            'state' => 'Toutatis',
            'agriculture' => 'Epona',
            'war' => 'Camulus',
            'love' => 'Sucellus',
            'commerce' => 'Lugus',
            'arts' => 'Belisama',
            'sea' => 'Lir',
            'healing' => 'Sirona',
            'hunting' => 'Cernunnos',

        ]);
        //3
        DB::table('religions')->insert([
            'religion_name' => 'Greek Polytheism',
            'state' => 'Zeus',
            'agriculture' => 'Demeter',
            'war' => 'Ares',
            'love' => 'Aphrodite',
            'commerce' => 'Hermes',
            'arts' => 'Athena',
            'sea' => 'Poseidon',
            'healing' => 'Asclepius',
            'hunting' => 'Artemis',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'female'
        ]);
        //4
        DB::table('religions')->insert([
            'religion_name' => 'Iberian Polytheism',
            'state' => 'Reo',
            'agriculture' => 'Ataegina',
            'war' => 'Neto',
            'love' => 'Sucellus',
            'commerce' => 'Lugus',
            'arts' => 'Belisama',
            'sea' => 'Duberdicus',
            'healing' => 'Endovelicus',
            'hunting' => 'Cernunnos',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'male',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'male'
        ]);
        //5
        DB::table('religions')->insert([
            'religion_name' => 'Libyan Polytheism',
            'state' => 'Mastinam',
            'agriculture' => 'Amun',
            'war' => 'Neith',
            'love' => 'Afri',
            'commerce' => 'Tanit',
            'arts' => 'Isis',
            'sea' => 'Awessu',
            'healing' => 'Anqet',
            'hunting' => 'Neith',
            'state_gender' => 'male',
            'agriculture_gender' => 'male',
            'war_gender' => 'female',
            'love_gender' => 'female',
            'commerce_gender' => 'female',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'female',
            'hunting_gender' => 'female'
        ]);
        //6
        DB::table('religions')->insert([
            'religion_name' => 'Norse Polytheism',
            'state' => 'Thor',
            'agriculture' => 'Fulla',
            'war' => 'Odin',
            'love' => 'Freia',
            'commerce' => 'Wodan',
            'arts' => 'Niorun',
            'sea' => 'Aegir',
            'healing' => 'Eir',
            'hunting' => 'Wodan',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'male',
            'sea_gender' => 'male',
            'healing_gender' => 'female',
            'hunting_gender' => 'male'
        ]);
        //7
        DB::table('religions')->insert([
            'religion_name' => 'Roman Polytheism',
            'state' => 'Jupiter',
            'agriculture' => 'Ceres',
            'war' => 'Mars',
            'love' => 'Venus',
            'commerce' => 'Mercurius',
            'arts' => 'Minerva',
            'sea' => 'Neptunus',
            'healing' => 'Asclepius',
            'hunting' => 'Diana',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'female'
        ]);
        //8
        DB::table('religions')->insert([
            'religion_name' => 'Scythian Polytheism',
            'state' => 'Papaios',
            'agriculture' => 'Satanaya',
            'war' => 'Agin',
            'love' => 'Argimpasa',
            'commerce' => 'Uastyrdzhi',
            'arts' => 'Tabiti',
            'sea' => 'Thagimasidas',
            'healing' => 'Oitosyros',
            'hunting' => 'Api',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'female'
        ]);
        //9
        DB::table('religions')->insert([
            'religion_name' => 'Thraco-Illyrian Polytheism',
            'state' => 'Sabazios',
            'agriculture' => 'Zemele',
            'war' => 'Armatus',
            'love' => 'Anzotica',
            'commerce' => 'Zalmoxis',
            'arts' => 'Hecate',
            'sea' => 'Bindus',
            'healing' => 'Derzelas',
            'hunting' => 'Bendis',
            'state_gender' => 'male',
            'agriculture_gender' => 'female',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'female'
        ]);
        //10
        DB::table('religions')->insert([
            'religion_name' => 'Zoroastrianism',
            'state' => 'Hormazd',
            'agriculture' => 'Hormazd',
            'war' => 'Hormazd',
            'love' => 'Hormazd',
            'commerce' => 'Hormazd',
            'arts' => 'Hormazd',
            'sea' => 'Hormazd',
            'healing' => 'Hormazd',
            'hunting' => 'Hormazd',
            'state_gender' => 'male',
            'agriculture_gender' => 'male',
            'war_gender' => 'male',
            'love_gender' => 'male',
            'commerce_gender' => 'male',
            'arts_gender' => 'male',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'male'
        ]);
        //11
        DB::table('religions')->insert([
            'religion_name' => 'Hellenistic Judaism',
            'state' => 'Yahweh',
            'agriculture' => 'Yahweh',
            'war' => 'Yahweh',
            'love' => 'Yahweh',
            'commerce' => 'Yahweh',
            'arts' => 'Yahweh',
            'sea' => 'Yahweh',
            'healing' => 'Yahweh',
            'hunting' => 'Yahweh',
            'state_gender' => 'male',
            'agriculture_gender' => 'male',
            'war_gender' => 'male',
            'love_gender' => 'male',
            'commerce_gender' => 'male',
            'arts_gender' => 'male',
            'sea_gender' => 'male',
            'healing_gender' => 'male',
            'hunting_gender' => 'male'
        ]);
        //12
        DB::table('religions')->insert([
            'religion_name' => 'Georgian Polytheism',
            'state' => 'Armazi',
            'agriculture' => 'Tevdore',
            'war' => 'Kopala',
            'love' => 'Samdzimari',
            'commerce' => 'Zaden',
            'arts' => 'Lamaria',
            'sea' => 'Leucothenia',
            'healing' => 'Barbale',
            'hunting' => 'Dali',
            'state_gender' => 'male',
            'agriculture_gender' => 'male',
            'war_gender' => 'male',
            'love_gender' => 'female',
            'commerce_gender' => 'male',
            'arts_gender' => 'female',
            'sea_gender' => 'female',
            'healing_gender' => 'female',
            'hunting_gender' => 'female'
        ]);
    }
}
