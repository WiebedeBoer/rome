<?php

use Illuminate\Database\Seeder;

class RealmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //latin
        //1
        DB::table('realms')->insert([
            'realm_name' => 'Rome',
            'culture' => '1'
        ]);
        //2
        DB::table('realms')->insert([
            'realm_name' => 'Samnium',
            'culture' => '1'
        ]);
        //3
        DB::table('realms')->insert([
            'realm_name' => 'Etruria',
            'culture' => '1'
        ]);
        //4
        DB::table('realms')->insert([
            'realm_name' => 'Umbria',
            'culture' => '1'
        ]);
        //5
        DB::table('realms')->insert([
            'realm_name' => 'Liguria',
            'culture' => '1'
        ]);
        //celtic
        //6 (cisalpina)
        DB::table('realms')->insert([
            'realm_name' => 'Norici',
            'culture' => '2'
        ]);
        //7
        DB::table('realms')->insert([
            'realm_name' => 'Helvetii',
            'culture' => '2'
        ]);
        //8
        DB::table('realms')->insert([
            'realm_name' => 'Venetii',
            'culture' => '2'
        ]);
        //9
        DB::table('realms')->insert([
            'realm_name' => 'Boii',
            'culture' => '2'
        ]);
        //10
        DB::table('realms')->insert([
            'realm_name' => 'Insubres',
            'culture' => '2'
        ]);
        //11
        DB::table('realms')->insert([
            'realm_name' => 'Taurini',
            'culture' => '2'
        ]);
        //12
        DB::table('realms')->insert([
            'realm_name' => 'Raeti',
            'culture' => '2'
        ]); 
        //alpes
        //13
        DB::table('realms')->insert([
            'realm_name' => 'Vocontii',
            'culture' => '2'
        ]);
        //14
        DB::table('realms')->insert([
            'realm_name' => 'Deciates',
            'culture' => '2'
        ]);
        //15 (gallia)
        DB::table('realms')->insert([
            'realm_name' => 'Salluvi',
            'culture' => '2'
        ]);
        //16
        DB::table('realms')->insert([
            'realm_name' => 'Allobroges',
            'culture' => '2'
        ]);
        //17
        DB::table('realms')->insert([
            'realm_name' => 'Sequani',
            'culture' => '2'
        ]);
        //18
        DB::table('realms')->insert([
            'realm_name' => 'Arverni',
            'culture' => '2'
        ]);
        //19
        DB::table('realms')->insert([
            'realm_name' => 'Volcae',
            'culture' => '2'
        ]);
        //20
        DB::table('realms')->insert([
            'realm_name' => 'Ausci',
            'culture' => '2'
        ]);
        //21
        DB::table('realms')->insert([
            'realm_name' => 'Bituriges',
            'culture' => '2'
        ]);
        //22
        DB::table('realms')->insert([
            'realm_name' => 'Lemovices',
            'culture' => '2'
        ]);
        //23
        DB::table('realms')->insert([
            'realm_name' => 'Cadurci',
            'culture' => '2'
        ]);
        //24
        DB::table('realms')->insert([
            'realm_name' => 'Redones',
            'culture' => '2'
        ]);
        //25
        DB::table('realms')->insert([
            'realm_name' => 'Cenomani',
            'culture' => '2'
        ]);
        //26
        DB::table('realms')->insert([
            'realm_name' => 'Parisii',
            'culture' => '2'
        ]);
        //27
        DB::table('realms')->insert([
            'realm_name' => 'Haedui',
            'culture' => '2'
        ]);
        //28
        DB::table('realms')->insert([
            'realm_name' => 'Lingones',
            'culture' => '2'
        ]);
        //29
        DB::table('realms')->insert([
            'realm_name' => 'Treveri',
            'culture' => '2'
        ]);
        //30
        DB::table('realms')->insert([
            'realm_name' => 'Senones',
            'culture' => '2'
        ]);
        //31
        DB::table('realms')->insert([
            'realm_name' => 'Ambiani',
            'culture' => '2'
        ]);
        //32
        DB::table('realms')->insert([
            'realm_name' => 'Caletes',
            'culture' => '2'
        ]);
        //33
        DB::table('realms')->insert([
            'realm_name' => 'Remi',
            'culture' => '2'
        ]);
        //34
        DB::table('realms')->insert([
            'realm_name' => 'Atrebates',
            'culture' => '2'
        ]);
        //35
        DB::table('realms')->insert([
            'realm_name' => 'Eburones',
            'culture' => '2'
        ]);
        //36
        DB::table('realms')->insert([
            'realm_name' => 'Namnetes',
            'culture' => '2'
        ]);
        //37
        DB::table('realms')->insert([
            'realm_name' => 'Turones',
            'culture' => '2'
        ]);
        // (britannia)
        DB::table('realms')->insert([
            'realm_name' => 'Durotriges',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Dumnonii',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Trinovantes',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Iceni',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Catuvellauni',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Ordovices',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Silures',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Demetae',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Cornovii',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Brigantes',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Caledonii',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Eblanii',
            'culture' => '2'
        ]);
        // (hispania, celtiberian)
        DB::table('realms')->insert([
            'realm_name' => 'Gallaeci',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Astures',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Cantabri',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Vaccaei',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Celtiberi',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Carpetani',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Vettones',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Lusitani',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Turduli',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Celtici',
            'culture' => '2'
        ]);
        // (basque)
        DB::table('realms')->insert([
            'realm_name' => 'Vascones',
            'culture' => '2'
        ]);
        // (tartessian)
        DB::table('realms')->insert([
            'realm_name' => 'Turdetani',
            'culture' => '2'
        ]);
        // (iberian)
        DB::table('realms')->insert([
            'realm_name' => 'Ilergetae',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Ilercavones',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Edetani',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Contestani',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Oretani',
            'culture' => '2'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Bastetani',
            'culture' => '2'
        ]);
        //germanic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Frisii',
            'culture' => '3'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Chauci',
            'culture' => '3'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Cherusci',
            'culture' => '3'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Chatti',
            'culture' => '3'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Tencteri',
            'culture' => '3'
        ]);  
        //
        DB::table('realms')->insert([
            'realm_name' => 'Alemanes',
            'culture' => '3'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Marcomanni',
            'culture' => '3'
        ]);  
        //
        DB::table('realms')->insert([
            'realm_name' => 'Quadi',
            'culture' => '3'
        ]);  
        //illyrian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Histria',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Liburnia',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Dalmatia',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Dardania',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Vardaei',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Scordisci',
            'culture' => '4'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Breuci',
            'culture' => '4'
        ]);
        //thracian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Dacia',
            'culture' => '5'
        ]);
        //punic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Carthage',
            'culture' => '6'
        ]);
        //numidian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Numidia',
            'culture' => '7'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Mauretania',
            'culture' => '7'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Garamantia',
            'culture' => '7'
        ]);
        //hellenic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Emporiae',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Massilia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Tarentum',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Syracusae',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Epirus',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Macedon',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Aegyptus',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Seleucid',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Bithynia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Caria',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Cilicia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Odrysia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Pergamon',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Aetolia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Achaea',
            'culture' => '8'
        ]);
        //persian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Pontus',
            'culture' => '9'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Armenia',
            'culture' => '9'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Parthia',
            'culture' => '9'
        ]);
        //arabic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Nabataea',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Lihyan',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Main',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Kindah',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Gerrha',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Saba',
            'culture' => '10'
        ]);
        //scythian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Scythia',
            'culture' => '11'
        ]);
        //sarmatian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Sarmatia',
            'culture' => '12'
        ]);

    }
}
