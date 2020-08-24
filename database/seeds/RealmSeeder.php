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
        //3 (etruria)
        DB::table('realms')->insert([
            'realm_name' => 'Etruria',
            'culture' => '2'
        ]);
        //4
        DB::table('realms')->insert([
            'realm_name' => 'Umbria',
            'culture' => '1'
        ]);
        //5 (liguria)
        DB::table('realms')->insert([
            'realm_name' => 'Liguria',
            'culture' => '2'
        ]);
        //celtic
        //6 (cisalpina)
        DB::table('realms')->insert([
            'realm_name' => 'Norici',
            'culture' => '3'
        ]);
        //7
        DB::table('realms')->insert([
            'realm_name' => 'Helvetii',
            'culture' => '3'
        ]);
        //8 (venetia)
        DB::table('realms')->insert([
            'realm_name' => 'Venetii',
            'culture' => '1'
        ]);
        //9
        DB::table('realms')->insert([
            'realm_name' => 'Boii',
            'culture' => '3'
        ]);
        //10
        DB::table('realms')->insert([
            'realm_name' => 'Insubres',
            'culture' => '3'
        ]);
        //11
        DB::table('realms')->insert([
            'realm_name' => 'Taurini',
            'culture' => '3'
        ]);
        //12 (raetia)
        DB::table('realms')->insert([
            'realm_name' => 'Raeti',
            'culture' => '2'
        ]); 
        //alpes
        //13
        DB::table('realms')->insert([
            'realm_name' => 'Vocontii',
            'culture' => '3'
        ]);
        //14
        DB::table('realms')->insert([
            'realm_name' => 'Deciates',
            'culture' => '3'
        ]);
        //15 (gallia)
        DB::table('realms')->insert([
            'realm_name' => 'Salluvi',
            'culture' => '3'
        ]);
        //16
        DB::table('realms')->insert([
            'realm_name' => 'Allobroges',
            'culture' => '3'
        ]);
        //17
        DB::table('realms')->insert([
            'realm_name' => 'Sequani',
            'culture' => '3'
        ]);
        //18
        DB::table('realms')->insert([
            'realm_name' => 'Arverni',
            'culture' => '3'
        ]);
        //19
        DB::table('realms')->insert([
            'realm_name' => 'Volcae',
            'culture' => '3'
        ]);
        //20
        DB::table('realms')->insert([
            'realm_name' => 'Nitiobroges',
            'culture' => '3'
        ]);
        //21
        DB::table('realms')->insert([
            'realm_name' => 'Bituriges',
            'culture' => '3'
        ]);
        //22
        DB::table('realms')->insert([
            'realm_name' => 'Lemovices',
            'culture' => '3'
        ]);
        //23
        DB::table('realms')->insert([
            'realm_name' => 'Cadurci',
            'culture' => '3'
        ]);
        //24
        DB::table('realms')->insert([
            'realm_name' => 'Redones',
            'culture' => '3'
        ]);
        //25
        DB::table('realms')->insert([
            'realm_name' => 'Cenomani',
            'culture' => '3'
        ]);
        //26
        DB::table('realms')->insert([
            'realm_name' => 'Parisii',
            'culture' => '3'
        ]);
        //27
        DB::table('realms')->insert([
            'realm_name' => 'Haedui',
            'culture' => '3'
        ]);
        //28
        DB::table('realms')->insert([
            'realm_name' => 'Lingones',
            'culture' => '3'
        ]);
        //29
        DB::table('realms')->insert([
            'realm_name' => 'Treveri',
            'culture' => '3'
        ]);
        //30
        DB::table('realms')->insert([
            'realm_name' => 'Senones',
            'culture' => '3'
        ]);
        //31
        DB::table('realms')->insert([
            'realm_name' => 'Ambiani',
            'culture' => '3'
        ]);
        //32
        DB::table('realms')->insert([
            'realm_name' => 'Caletes',
            'culture' => '3'
        ]);
        //33
        DB::table('realms')->insert([
            'realm_name' => 'Remi',
            'culture' => '3'
        ]);
        //34
        DB::table('realms')->insert([
            'realm_name' => 'Atrebates',
            'culture' => '3'
        ]);
        //35
        DB::table('realms')->insert([
            'realm_name' => 'Eburones',
            'culture' => '3'
        ]);
        //36
        DB::table('realms')->insert([
            'realm_name' => 'Namnetes',
            'culture' => '3'
        ]);
        //37
        DB::table('realms')->insert([
            'realm_name' => 'Turones',
            'culture' => '3'
        ]);
        //38
        DB::table('realms')->insert([
            'realm_name' => 'Pictones',
            'culture' => '3'
        ]);
        //39 (britannia)
        DB::table('realms')->insert([
            'realm_name' => 'Belgae',
            'culture' => '4'
        ]);
        //40
        DB::table('realms')->insert([
            'realm_name' => 'Dumnonii',
            'culture' => '4'
        ]);
        //41
        DB::table('realms')->insert([
            'realm_name' => 'Dobunni',
            'culture' => '4'
        ]);
        //42
        DB::table('realms')->insert([
            'realm_name' => 'Silures',
            'culture' => '4'
        ]);
        //43
        DB::table('realms')->insert([
            'realm_name' => 'Demetae',
            'culture' => '4'
        ]);
        //44
        DB::table('realms')->insert([
            'realm_name' => 'Ordovices',
            'culture' => '4'
        ]);
        //45
        DB::table('realms')->insert([
            'realm_name' => 'Cornovii',
            'culture' => '4'
        ]);
        //46
        DB::table('realms')->insert([
            'realm_name' => 'Regnenses',
            'culture' => '4'
        ]);
        //47
        DB::table('realms')->insert([
            'realm_name' => 'Catuvellauni',
            'culture' => '4'
        ]);
        //48
        DB::table('realms')->insert([
            'realm_name' => 'Trinovantes',
            'culture' => '4'
        ]);
        //49
        DB::table('realms')->insert([
            'realm_name' => 'Iceni',
            'culture' => '4'
        ]);
        //50
        DB::table('realms')->insert([
            'realm_name' => 'Coritani',
            'culture' => '4'
        ]);
        //51
        DB::table('realms')->insert([
            'realm_name' => 'Brigantes',
            'culture' => '4'
        ]);
        //52
        DB::table('realms')->insert([
            'realm_name' => 'Caledonii',
            'culture' => '4'
        ]);
        //53
        DB::table('realms')->insert([
            'realm_name' => 'Eblanii',
            'culture' => '4'
        ]);
        //54 (hispania, celtiberian)
        DB::table('realms')->insert([
            'realm_name' => 'Gallaeci',
            'culture' => '5'
        ]);
        //55
        DB::table('realms')->insert([
            'realm_name' => 'Astures',
            'culture' => '5'
        ]);
        //56
        DB::table('realms')->insert([
            'realm_name' => 'Cantabri',
            'culture' => '5'
        ]);
        //57
        DB::table('realms')->insert([
            'realm_name' => 'Vaccaei',
            'culture' => '5'
        ]);
        //58
        DB::table('realms')->insert([
            'realm_name' => 'Celtiberi',
            'culture' => '5'
        ]);
        //59
        DB::table('realms')->insert([
            'realm_name' => 'Carpetani',
            'culture' => '5'
        ]);
        //60
        DB::table('realms')->insert([
            'realm_name' => 'Vettones',
            'culture' => '5'
        ]);
        //61
        DB::table('realms')->insert([
            'realm_name' => 'Lusitani',
            'culture' => '5'
        ]);
        //62
        DB::table('realms')->insert([
            'realm_name' => 'Turduli',
            'culture' => '5'
        ]);
        //63
        DB::table('realms')->insert([
            'realm_name' => 'Celtici',
            'culture' => '5'
        ]);
        //64 (aquitanian)
        DB::table('realms')->insert([
            'realm_name' => 'Ausci',
            'culture' => '6'
        ]);
        //65
        DB::table('realms')->insert([
            'realm_name' => 'Vascones',
            'culture' => '6'
        ]);
        //66 (tartessian)
        DB::table('realms')->insert([
            'realm_name' => 'Turdetani',
            'culture' => '7'
        ]);
        //67 (iberian)
        DB::table('realms')->insert([
            'realm_name' => 'Oretani',
            'culture' => '8'
        ]);
        //68
        DB::table('realms')->insert([
            'realm_name' => 'Edetani',
            'culture' => '8'
        ]);
        //69
        DB::table('realms')->insert([
            'realm_name' => 'Ilercavones',
            'culture' => '8'
        ]);
        //70 
        DB::table('realms')->insert([
            'realm_name' => 'Ilergetae',
            'culture' => '8'
        ]);
        //germanic
        //71
        DB::table('realms')->insert([
            'realm_name' => 'Frisii',
            'culture' => '9'
        ]);
        //72
        DB::table('realms')->insert([
            'realm_name' => 'Batavii',
            'culture' => '9'
        ]);
        //73
        DB::table('realms')->insert([
            'realm_name' => 'Chamavi',
            'culture' => '9'
        ]);
        //74
        DB::table('realms')->insert([
            'realm_name' => 'Bructeri',
            'culture' => '9'
        ]);
        //75
        DB::table('realms')->insert([
            'realm_name' => 'Cherusci',
            'culture' => '9'
        ]);
        //76
        DB::table('realms')->insert([
            'realm_name' => 'Chauci',
            'culture' => '9'
        ]);
        //77
        DB::table('realms')->insert([
            'realm_name' => 'Chatti',
            'culture' => '9'
        ]);
        //78
        DB::table('realms')->insert([
            'realm_name' => 'Tencteri',
            'culture' => '9'
        ]);  
        //79
        DB::table('realms')->insert([
            'realm_name' => 'Alemanes',
            'culture' => '9'
        ]);
        //80
        DB::table('realms')->insert([
            'realm_name' => 'Hermunduri',
            'culture' => '9'
        ]); 
        //81
        DB::table('realms')->insert([
            'realm_name' => 'Marcomanni',
            'culture' => '9'
        ]);  
        //82
        DB::table('realms')->insert([
            'realm_name' => 'Quadi',
            'culture' => '9'
        ]);  
        //illyrian
        //83
        DB::table('realms')->insert([
            'realm_name' => 'Histria',
            'culture' => '10'
        ]);
        //84
        DB::table('realms')->insert([
            'realm_name' => 'Liburnia',
            'culture' => '10'
        ]);
        //85
        DB::table('realms')->insert([
            'realm_name' => 'Dalmatia',
            'culture' => '10'
        ]);
        //86
        DB::table('realms')->insert([
            'realm_name' => 'Dardania',
            'culture' => '10'
        ]);
        //87
        DB::table('realms')->insert([
            'realm_name' => 'Vardaei',
            'culture' => '10'
        ]);
        //88
        DB::table('realms')->insert([
            'realm_name' => 'Scordisci',
            'culture' => '3'
        ]);
        //89
        DB::table('realms')->insert([
            'realm_name' => 'Breuci',
            'culture' => '10'
        ]);
        //90
        DB::table('realms')->insert([
            'realm_name' => 'Hercuniates',
            'culture' => '10'
        ]);
        //thracian
        //91
        DB::table('realms')->insert([
            'realm_name' => 'Dacia',
            'culture' => '11'
        ]);
        //punic
        //92
        DB::table('realms')->insert([
            'realm_name' => 'Carthage',
            'culture' => '12'
        ]);
        //numidian
        //93
        DB::table('realms')->insert([
            'realm_name' => 'Numidia',
            'culture' => '13'
        ]);
        //94
        DB::table('realms')->insert([
            'realm_name' => 'Mauretania',
            'culture' => '13'
        ]);
        //95
        DB::table('realms')->insert([
            'realm_name' => 'Garamantia',
            'culture' => '13'
        ]);
        //greek colonies, hispania
        //96
        DB::table('realms')->insert([
            'realm_name' => 'Lucentum',
            'culture' => '14'
        ]);
        //97
        DB::table('realms')->insert([
            'realm_name' => 'Barcino',
            'culture' => '14'
        ]);
        //98
        DB::table('realms')->insert([
            'realm_name' => 'Emporiae',
            'culture' => '14'
        ]);
        //greek colonies, gallia
        //99
        DB::table('realms')->insert([
            'realm_name' => 'Agathe',
            'culture' => '14'
        ]);
        //100
        DB::table('realms')->insert([
            'realm_name' => 'Massilia',
            'culture' => '14'
        ]);
        //greek colonies, italia
        //101
        DB::table('realms')->insert([
            'realm_name' => 'Neapolis',
            'culture' => '14'
        ]);
        //102
        DB::table('realms')->insert([
            'realm_name' => 'Paestum',
            'culture' => '14'
        ]);
        //103
        DB::table('realms')->insert([
            'realm_name' => 'Crotona',
            'culture' => '14'
        ]);
        //104
        DB::table('realms')->insert([
            'realm_name' => 'Tarentum',
            'culture' => '14'
        ]);
        //105
        DB::table('realms')->insert([
            'realm_name' => 'Messana',
            'culture' => '14'
        ]);
        //106
        DB::table('realms')->insert([
            'realm_name' => 'Syracusae',
            'culture' => '14'
        ]);
        //hellenic
        //107
        DB::table('realms')->insert([
            'realm_name' => 'Epirus',
            'culture' => '14'
        ]);
        //108
        DB::table('realms')->insert([
            'realm_name' => 'Macedon',
            'culture' => '14'
        ]);
        //109
        DB::table('realms')->insert([
            'realm_name' => 'Aegyptus',
            'culture' => '14'
        ]);
        //110
        DB::table('realms')->insert([
            'realm_name' => 'Seleucid',
            'culture' => '14'
        ]);
        //111
        DB::table('realms')->insert([
            'realm_name' => 'Bithynia',
            'culture' => '14'
        ]);
        //112
        DB::table('realms')->insert([
            'realm_name' => 'Caria',
            'culture' => '14'
        ]);
        //113
        DB::table('realms')->insert([
            'realm_name' => 'Cilicia',
            'culture' => '14'
        ]);
        //114 (thracia)
        DB::table('realms')->insert([
            'realm_name' => 'Odrysia',
            'culture' => '11'
        ]);
        //115 (asia)
        DB::table('realms')->insert([
            'realm_name' => 'Pergamon',
            'culture' => '14'
        ]);
        //116 (galatia)
        DB::table('realms')->insert([
            'realm_name' => 'Galatia',
            'culture' => '3'
        ]);
        //117 (cappadocia)
        DB::table('realms')->insert([
            'realm_name' => 'Cappadocia',
            'culture' => '14'
        ]);
        //118 (greek leagues)
        DB::table('realms')->insert([
            'realm_name' => 'Aetolia',
            'culture' => '14'
        ]);
        //119
        DB::table('realms')->insert([
            'realm_name' => 'Achaea',
            'culture' => '14'
        ]);
        //armenian
        //120
        DB::table('realms')->insert([
            'realm_name' => 'Armenia',
            'culture' => '15'
        ]);
        //kartvelian
        //121
        DB::table('realms')->insert([
            'realm_name' => 'Colchis',
            'culture' => '16'
        ]);
        //122
        DB::table('realms')->insert([
            'realm_name' => 'Iberia',
            'culture' => '16'
        ]);
        //gargarian
        //123
        DB::table('realms')->insert([
            'realm_name' => 'Albania',
            'culture' => '17'
        ]);
        //pontic
        //124
        DB::table('realms')->insert([
            'realm_name' => 'Pontus',
            'culture' => '18'
        ]);
        //persian
        //125
        DB::table('realms')->insert([
            'realm_name' => 'Media Atropatene',
            'culture' => '19'
        ]);
        //126
        DB::table('realms')->insert([
            'realm_name' => 'Parthia',
            'culture' => '19'
        ]);
        //127
        DB::table('realms')->insert([
            'realm_name' => 'Bactria',
            'culture' => '14'
        ]);
        //arabic
        //128
        DB::table('realms')->insert([
            'realm_name' => 'Judea',
            'culture' => '23'
        ]);
        //129
        DB::table('realms')->insert([
            'realm_name' => 'Nabataea',
            'culture' => '20'
        ]);
        //130
        DB::table('realms')->insert([
            'realm_name' => 'Lihyan',
            'culture' => '20'
        ]);
        //131
        DB::table('realms')->insert([
            'realm_name' => 'Main',
            'culture' => '20'
        ]);
        //132
        DB::table('realms')->insert([
            'realm_name' => 'Kindah',
            'culture' => '20'
        ]);
        //133
        DB::table('realms')->insert([
            'realm_name' => 'Gerrha',
            'culture' => '20'
        ]);
        //134
        DB::table('realms')->insert([
            'realm_name' => 'Saba',
            'culture' => '20'
        ]);
        //sarmatian
        //135
        DB::table('realms')->insert([
            'realm_name' => 'Sarmatia',
            'culture' => '22'
        ]);
        //scythian
        //136
        DB::table('realms')->insert([
            'realm_name' => 'Scythia',
            'culture' => '21'
        ]);
        //aksum
        //137
        DB::table('realms')->insert([
            'realm_name' => 'Aksum',
            'culture' => '20'
        ]);
        //kush
        //138
        DB::table('realms')->insert([
            'realm_name' => 'Kush',
            'culture' => '13'
        ]);
        //numidian
        //139
        DB::table('realms')->insert([
            'realm_name' => 'Altava',
            'culture' => '13'
        ]);
        //140
        DB::table('realms')->insert([
            'realm_name' => 'Gaetulia',
            'culture' => '13'
        ]);
        //141
        DB::table('realms')->insert([
            'realm_name' => 'Musulamia',
            'culture' => '13'
        ]);
        //indo scythian
        //142
        DB::table('realms')->insert([
            'realm_name' => 'Saka',
            'culture' => '21'
        ]);
        //tuareg
        //143
        DB::table('realms')->insert([
            'realm_name' => 'Tahaggart',
            'culture' => '13'
        ]);
        //indo scythian
        //144
        DB::table('realms')->insert([
            'realm_name' => 'Massagetae',
            'culture' => '21'
        ]);
        //145
        DB::table('realms')->insert([
            'realm_name' => 'Sindica',
            'culture' => '21'
        ]);
    }
}
