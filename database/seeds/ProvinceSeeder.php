<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //italia
        //1
        DB::table('provinces')->insert([
            'province_name' => 'Latium',
            'region' => '1'
        ]);
        //2
        DB::table('provinces')->insert([
            'province_name' => 'Campania',
            'region' => '1'
        ]);
        //3
        DB::table('provinces')->insert([
            'province_name' => 'Lucania',
            'region' => '1'
        ]);
        //4
        DB::table('provinces')->insert([
            'province_name' => 'Bruttium',
            'region' => '1'
        ]);
        //5
        DB::table('provinces')->insert([
            'province_name' => 'Calabria',
            'region' => '1'
        ]);
        //6
        DB::table('provinces')->insert([
            'province_name' => 'Apulia',
            'region' => '1'
        ]);
        //7
        DB::table('provinces')->insert([
            'province_name' => 'Samnium',
            'region' => '1'
        ]);
        //8
        DB::table('provinces')->insert([
            'province_name' => 'Umbria',
            'region' => '1'
        ]);
        //9
        DB::table('provinces')->insert([
            'province_name' => 'Picenum',
            'region' => '1'
        ]);
        //10
        DB::table('provinces')->insert([
            'province_name' => 'Etruria',
            'region' => '1'
        ]);
        //sicilia
        //11
        DB::table('provinces')->insert([
            'province_name' => 'Sicilia',
            'region' => '2'
        ]);
        //sardinia
        //12
        DB::table('provinces')->insert([
            'province_name' => 'Sardinia',
            'region' => '3'
        ]);
        //corsica
        //13
        DB::table('provinces')->insert([
            'province_name' => 'Corsica',
            'region' => '4'
        ]);
        //annonaria
        //14
        DB::table('provinces')->insert([
            'province_name' => 'Aemilia',
            'region' => '5'
        ]);
        //15
        DB::table('provinces')->insert([
            'province_name' => 'Liguria',
            'region' => '5'
        ]);
        //16
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Cisalpina',
            'region' => '5'
        ]);
        //17
        DB::table('provinces')->insert([
            'province_name' => 'Raetia Prima',
            'region' => '5'
        ]);
        //18
        DB::table('provinces')->insert([
            'province_name' => 'Raetia Secunda',
            'region' => '5'
        ]);
        //19
        DB::table('provinces')->insert([
            'province_name' => 'Noricum',
            'region' => '5'
        ]);
        //20
        DB::table('provinces')->insert([
            'province_name' => 'Venetia',
            'region' => '5'
        ]);
        //21
        DB::table('provinces')->insert([
            'province_name' => 'Alpes Cottiae',
            'region' => '5'
        ]);
        //22
        DB::table('provinces')->insert([
            'province_name' => 'Alpes Maritimae',
            'region' => '5'
        ]);
        //23
        DB::table('provinces')->insert([
            'province_name' => 'Alpes Poeniae',
            'region' => '5'
        ]);
        //gallia
        //24
        DB::table('provinces')->insert([
            'province_name' => 'Helvetia',
            'region' => '6'
        ]);
        //25
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Viennensis',
            'region' => '6'
        ]);
        //26
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Lugdunensis',
            'region' => '6'
        ]);
        //27
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Narbonensis',
            'region' => '6'
        ]);
        //28
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Aquitania',
            'region' => '6'
        ]);
        //29
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Celtica',
            'region' => '6'
        ]);
        //30
        DB::table('provinces')->insert([
            'province_name' => 'Gallia Senonia',
            'region' => '6'
        ]);
        //31
        DB::table('provinces')->insert([
            'province_name' => 'Belgica Prima',
            'region' => '6'
        ]);
        //32
        DB::table('provinces')->insert([
            'province_name' => 'Belgica Secunda',
            'region' => '6'
        ]);
        //germania
        //33
        DB::table('provinces')->insert([
            'province_name' => 'Germania Inferior',
            'region' => '7'
        ]);
        //34
        DB::table('provinces')->insert([
            'province_name' => 'Germania Superior',
            'region' => '7'
        ]);
        //35
        DB::table('provinces')->insert([
            'province_name' => 'Germania Ulterior',
            'region' => '7'
        ]);
        //36
        DB::table('provinces')->insert([
            'province_name' => 'Bohemia',
            'region' => '7'
        ]);
        //Britannia
        //37
        DB::table('provinces')->insert([
            'province_name' => 'Britannia Prima',
            'region' => '8'
        ]);
        //38
        DB::table('provinces')->insert([
            'province_name' => 'Britannia Secunda',
            'region' => '8'
        ]);
        //39
        DB::table('provinces')->insert([
            'province_name' => 'Britannia Caesariensis',
            'region' => '8'
        ]);
        //40
        DB::table('provinces')->insert([
            'province_name' => 'Britannia Flavia',
            'region' => '8'
        ]);
        //41
        DB::table('provinces')->insert([
            'province_name' => 'Britannia Valentia',
            'region' => '8'
        ]);
        //42
        DB::table('provinces')->insert([
            'province_name' => 'Caledonia',
            'region' => '8'
        ]);
        //Hibernia
        //43
        DB::table('provinces')->insert([
            'province_name' => 'Hibernia',
            'region' => '9'
        ]);
        //Hispania
        //44
        DB::table('provinces')->insert([
            'province_name' => 'Hispania Tarraconensis',
            'region' => '10'
        ]);
        //45
        DB::table('provinces')->insert([
            'province_name' => 'Hispania Carthaginensis',
            'region' => '10'
        ]);
        //46
        DB::table('provinces')->insert([
            'province_name' => 'Hispania Baetica',
            'region' => '10'
        ]);
        //47
        DB::table('provinces')->insert([
            'province_name' => 'Hispania Ulterior',
            'region' => '10'
        ]);
        //48
        DB::table('provinces')->insert([
            'province_name' => 'Gallaecia',
            'region' => '10'
        ]);
        //49
        DB::table('provinces')->insert([
            'province_name' => 'Lusitania',
            'region' => '10'
        ]);
        //Mallorca
        //50
        DB::table('provinces')->insert([
            'province_name' => 'Balearis Maior',
            'region' => '11'
        ]);
        //Ibiza
        //51
        DB::table('provinces')->insert([
            'province_name' => 'Balearis Ebusus',
            'region' => '12'
        ]);
        //Mauretania
        //52
        DB::table('provinces')->insert([
            'province_name' => 'Mauretania Tingitana',
            'region' => '13'
        ]);
        //53
        DB::table('provinces')->insert([
            'province_name' => 'Mauretania Caesariensis',
            'region' => '13'
        ]);
        //54
        DB::table('provinces')->insert([
            'province_name' => 'Mauretania Sitifensis',
            'region' => '13'
        ]);
        //numidia
        //55
        DB::table('provinces')->insert([
            'province_name' => 'Numidia Cirtensis',
            'region' => '14'
        ]);
        //56
        DB::table('provinces')->insert([
            'province_name' => 'Numidia Militiana',
            'region' => '14'
        ]);
        //africa
        //57
        DB::table('provinces')->insert([
            'province_name' => 'Africa Zeugitana',
            'region' => '15'
        ]);
        //58
        DB::table('provinces')->insert([
            'province_name' => 'Africa Byzacium',
            'region' => '15'
        ]);
        //59
        DB::table('provinces')->insert([
            'province_name' => 'Africa Emporia',
            'region' => '15'
        ]);
        //60
        DB::table('provinces')->insert([
            'province_name' => 'Africa Tripolitana',
            'region' => '15'
        ]);
        //61
        DB::table('provinces')->insert([
            'province_name' => 'Phasania',
            'region' => '15'
        ]);
        //62
        DB::table('provinces')->insert([
            'province_name' => 'Garamantia',
            'region' => '15'
        ]);
        //Aegyptus
        //63
        DB::table('provinces')->insert([
            'province_name' => 'Cyrenaica',
            'region' => '16'
        ]);
        //64
        DB::table('provinces')->insert([
            'province_name' => 'Marmarica',
            'region' => '16'
        ]);
        //65
        DB::table('provinces')->insert([
            'province_name' => 'Aegyptus Inferior',
            'region' => '16'
        ]);
        //66
        DB::table('provinces')->insert([
            'province_name' => 'Aegyptus Herculia',
            'region' => '16'
        ]);
        //67
        DB::table('provinces')->insert([
            'province_name' => 'Aegyptus Heptanomis',
            'region' => '16'
        ]);
        //68
        DB::table('provinces')->insert([
            'province_name' => 'Aegyptus Thebais',
            'region' => '16'
        ]);
        //Cyprus
        //69
        DB::table('provinces')->insert([
            'province_name' => 'Cyprus',
            'region' => '17'
        ]);
        //Creta
        //70
        DB::table('provinces')->insert([
            'province_name' => 'Creta',
            'region' => '18'
        ]);
        //Cyclades
        //71
        DB::table('provinces')->insert([
            'province_name' => 'Cyclades',
            'region' => '19'
        ]);
        //Rhodus
        //72
        DB::table('provinces')->insert([
            'province_name' => 'Rhodus',
            'region' => '20'
        ]);
        //Achaea
        //73
        DB::table('provinces')->insert([
            'province_name' => 'Laconia',
            'region' => '21'
        ]);
        //74
        DB::table('provinces')->insert([
            'province_name' => 'Messenia',
            'region' => '21'
        ]);
        //75
        DB::table('provinces')->insert([
            'province_name' => 'Arcadia',
            'region' => '21'
        ]);
        //76
        DB::table('provinces')->insert([
            'province_name' => 'Elis',
            'region' => '21'
        ]);
        //77
        DB::table('provinces')->insert([
            'province_name' => 'Achaea',
            'region' => '21'
        ]);
        //78
        DB::table('provinces')->insert([
            'province_name' => 'Argolis',
            'region' => '21'
        ]);
        //79
        DB::table('provinces')->insert([
            'province_name' => 'Corinthia',
            'region' => '21'
        ]);
        //hellas
        //80
        DB::table('provinces')->insert([
            'province_name' => 'Attica',
            'region' => '22'
        ]);
        //81
        DB::table('provinces')->insert([
            'province_name' => 'Boeotia',
            'region' => '22'
        ]);
        //82
        DB::table('provinces')->insert([
            'province_name' => 'Aetolia',
            'region' => '22'
        ]);
        //83
        DB::table('provinces')->insert([
            'province_name' => 'Acarnania',
            'region' => '22'
        ]);
        //84
        DB::table('provinces')->insert([
            'province_name' => 'Magnesia',
            'region' => '22'
        ]);
        //85
        DB::table('provinces')->insert([
            'province_name' => 'Thessalia',
            'region' => '22'
        ]);
        //Macedonia
        //86
        DB::table('provinces')->insert([
            'province_name' => 'Epirus',
            'region' => '23'
        ]);
        //87
        DB::table('provinces')->insert([
            'province_name' => 'Macedonia Salutaris',
            'region' => '23'
        ]);
        //88
        DB::table('provinces')->insert([
            'province_name' => 'Paeonia',
            'region' => '23'
        ]);
        //Thracia
        //89
        DB::table('provinces')->insert([
            'province_name' => 'Rhodope',
            'region' => '24'
        ]);
        //90
        DB::table('provinces')->insert([
            'province_name' => 'Europa',
            'region' => '24'
        ]);
        //91
        DB::table('provinces')->insert([
            'province_name' => 'Thracia Salutaris',
            'region' => '24'
        ]);
        //92
        DB::table('provinces')->insert([
            'province_name' => 'Thracia Haemimontus',
            'region' => '24'
        ]);
        //93
        DB::table('provinces')->insert([
            'province_name' => 'Moesia',
            'region' => '24'
        ]);
        //Illyricum
        //94
        DB::table('provinces')->insert([
            'province_name' => 'Dardania',
            'region' => '25'
        ]);
        //95
        DB::table('provinces')->insert([
            'province_name' => 'Prevalitana',
            'region' => '25'
        ]);
        //96
        DB::table('provinces')->insert([
            'province_name' => 'Dalmatia',
            'region' => '25'
        ]);
        //97
        DB::table('provinces')->insert([
            'province_name' => 'Liburnia',
            'region' => '25'
        ]);
        //98
        DB::table('provinces')->insert([
            'province_name' => 'Histria',
            'region' => '25'
        ]);
        //99
        DB::table('provinces')->insert([
            'province_name' => 'Pannonia Prima',
            'region' => '25'
        ]);
        //100
        DB::table('provinces')->insert([
            'province_name' => 'Pannonia Secunda',
            'region' => '25'
        ]);
        //101
        DB::table('provinces')->insert([
            'province_name' => 'Pannonia Savia',
            'region' => '25'
        ]);
        //102
        DB::table('provinces')->insert([
            'province_name' => 'Pannonia Valeria',
            'region' => '25'
        ]);
        //Dacia
        //103
        DB::table('provinces')->insert([
            'province_name' => 'Dacia Apulensis',
            'region' => '26'
        ]);
        //104
        DB::table('provinces')->insert([
            'province_name' => 'Dacia Malvensis',
            'region' => '26'
        ]);
        //105
        DB::table('provinces')->insert([
            'province_name' => 'Dacia Porolissensis',
            'region' => '26'
        ]);
        //106
        DB::table('provinces')->insert([
            'province_name' => 'Dacia Ripensis',
            'region' => '26'
        ]);
        //Bosporus
        //107
        DB::table('provinces')->insert([
            'province_name' => 'Bosporus',
            'region' => '27'
        ]);
        //Sarmatia
        //108
        DB::table('provinces')->insert([
            'province_name' => 'Sarmatia',
            'region' => '28'
        ]);
        //Scythia
        //109
        DB::table('provinces')->insert([
            'province_name' => 'Scythia',
            'region' => '29'
        ]);
        //chios
        //110
        DB::table('provinces')->insert([
            'province_name' => 'Chios',
            'region' => '30'
        ]);        
        //Asia
        //111
        DB::table('provinces')->insert([
            'province_name' => 'Ionia',
            'region' => '31'
        ]);
        //112
        DB::table('provinces')->insert([
            'province_name' => 'Caria',
            'region' => '31'
        ]);
        //113
        DB::table('provinces')->insert([
            'province_name' => 'Lydia',
            'region' => '31'
        ]);
        //114
        DB::table('provinces')->insert([
            'province_name' => 'Aeolia',
            'region' => '31'
        ]);
        //115
        DB::table('provinces')->insert([
            'province_name' => 'Lycia',
            'region' => '31'
        ]);
        //116
        DB::table('provinces')->insert([
            'province_name' => 'Pamphylia',
            'region' => '31'
        ]);
        //117
        DB::table('provinces')->insert([
            'province_name' => 'Mysia',
            'region' => '31'
        ]);
        //118
        DB::table('provinces')->insert([
            'province_name' => 'Bithynia',
            'region' => '31'
        ]);
        //119
        DB::table('provinces')->insert([
            'province_name' => 'Paphlagonia',
            'region' => '31'
        ]);
        //120
        DB::table('provinces')->insert([
            'province_name' => 'Pisidia',
            'region' => '31'
        ]);
        //121
        DB::table('provinces')->insert([
            'province_name' => 'Phrygia Pacatania',
            'region' => '31'
        ]);
        //122
        DB::table('provinces')->insert([
            'province_name' => 'Phrygia Salutaris',
            'region' => '31'
        ]);
        //123
        DB::table('provinces')->insert([
            'province_name' => 'Phrygia Maior',
            'region' => '31'
        ]);
        //124
        DB::table('provinces')->insert([
            'province_name' => 'Lycaonia',
            'region' => '31'
        ]);
        //125
        DB::table('provinces')->insert([
            'province_name' => 'Pontus Honorias',
            'region' => '31'
        ]);
        //126
        DB::table('provinces')->insert([
            'province_name' => 'Pontus Polemoniacus',
            'region' => '31'
        ]);
        //127
        DB::table('provinces')->insert([
            'province_name' => 'Pontus Chaldia',
            'region' => '31'
        ]);
        //128
        DB::table('provinces')->insert([
            'province_name' => 'Galatia Salutaris',
            'region' => '31'
        ]);
        //129
        DB::table('provinces')->insert([
            'province_name' => 'Gallatia Secunda',
            'region' => '31'
        ]);
        //130
        DB::table('provinces')->insert([
            'province_name' => 'Cappadocia Prima',
            'region' => '31'
        ]);
        //131
        DB::table('provinces')->insert([
            'province_name' => 'Cappadocia Secunda',
            'region' => '31'
        ]);
        //132
        DB::table('provinces')->insert([
            'province_name' => 'Cappadocia Chamanene',
            'region' => '31'
        ]);
        //133
        DB::table('provinces')->insert([
            'province_name' => 'Cappadocia Cataonia',
            'region' => '31'
        ]);
        //134
        DB::table('provinces')->insert([
            'province_name' => 'Cappadocia Melitene',
            'region' => '31'
        ]);
        //135
        DB::table('provinces')->insert([
            'province_name' => 'Cilicia Trachea',
            'region' => '31'
        ]);
        //136
        DB::table('provinces')->insert([
            'province_name' => 'Cilicia Aspera',
            'region' => '31'
        ]);
        //137
        DB::table('provinces')->insert([
            'province_name' => 'Cilicia Pedias',
            'region' => '31'
        ]);
        //Armenia
        //138
        DB::table('provinces')->insert([
            'province_name' => 'Armenia Minor',
            'region' => '32'
        ]);
        //139
        DB::table('provinces')->insert([
            'province_name' => 'Armenia Maior',
            'region' => '32'
        ]);
        //140
        DB::table('provinces')->insert([
            'province_name' => 'Armenia Superior',
            'region' => '32'
        ]);
        //141
        DB::table('provinces')->insert([
            'province_name' => 'Armenia Ararat',
            'region' => '32'
        ]);
        //142
        DB::table('provinces')->insert([
            'province_name' => 'Armenia Tertia',
            'region' => '32'
        ]);
        //143
        DB::table('provinces')->insert([
            'province_name' => 'Arzanene',
            'region' => '32'
        ]);
        //144
        DB::table('provinces')->insert([
            'province_name' => 'Acilisene',
            'region' => '32'
        ]);
        //145
        DB::table('provinces')->insert([
            'province_name' => 'Corduene',
            'region' => '32'
        ]);
        //146
        DB::table('provinces')->insert([
            'province_name' => 'Colchis',
            'region' => '32'
        ]);
        //147
        DB::table('provinces')->insert([
            'province_name' => 'Iberia',
            'region' => '32'
        ]);
        //148
        DB::table('provinces')->insert([
            'province_name' => 'Albania',
            'region' => '32'
        ]);
        //Persia
        //149
        DB::table('provinces')->insert([
            'province_name' => 'Media Atropatene',
            'region' => '33'
        ]);
        //150
        DB::table('provinces')->insert([
            'province_name' => 'Hyrcania',
            'region' => '33'
        ]);
        //151
        DB::table('provinces')->insert([
            'province_name' => 'Arsacia',
            'region' => '33'
        ]);
        //152
        DB::table('provinces')->insert([
            'province_name' => 'Susiana',
            'region' => '33'
        ]);
        //153
        DB::table('provinces')->insert([
            'province_name' => 'Persia',
            'region' => '33'
        ]);
        //154
        DB::table('provinces')->insert([
            'province_name' => 'Carmania',
            'region' => '33'
        ]);
        //Mesopotamia
        //155
        DB::table('provinces')->insert([
            'province_name' => 'Characene',
            'region' => '34'
        ]);
        //156
        DB::table('provinces')->insert([
            'province_name' => 'Babylonia',
            'region' => '34'
        ]);
        //157
        DB::table('provinces')->insert([
            'province_name' => 'Assyria',
            'region' => '34'
        ]);
        //158
        DB::table('provinces')->insert([
            'province_name' => 'Osrhoene',
            'region' => '34'
        ]);
        //159
        DB::table('provinces')->insert([
            'province_name' => 'Adiabene',
            'region' => '34'
        ]);
        //160
        DB::table('provinces')->insert([
            'province_name' => 'Commagene',
            'region' => '34'
        ]);
        //161
        DB::table('provinces')->insert([
            'province_name' => 'Sophene',
            'region' => '34'
        ]);
        //162
        DB::table('provinces')->insert([
            'province_name' => 'Mesopotamia Prima',
            'region' => '34'
        ]);
        //163
        DB::table('provinces')->insert([
            'province_name' => 'Mesopotamia Secunda',
            'region' => '34'
        ]);
        //syria
        //164
        DB::table('provinces')->insert([
            'province_name' => 'Syria Euphratensis',
            'region' => '35'
        ]);
        //165
        DB::table('provinces')->insert([
            'province_name' => 'Syria Tetrapolis',
            'region' => '35'
        ]);
        //166
        DB::table('provinces')->insert([
            'province_name' => 'Syria Coele',
            'region' => '35'
        ]);
        //167
        DB::table('provinces')->insert([
            'province_name' => 'Phoenicia',
            'region' => '35'
        ]);
        //168
        DB::table('provinces')->insert([
            'province_name' => 'Peraea',
            'region' => '35'
        ]);
        //169
        DB::table('provinces')->insert([
            'province_name' => 'Judea',
            'region' => '35'
        ]);
        //170
        DB::table('provinces')->insert([
            'province_name' => 'Samaria',
            'region' => '35'
        ]);
        //171
        DB::table('provinces')->insert([
            'province_name' => 'Galilee',
            'region' => '35'
        ]);
        //arabia
        //172
        DB::table('provinces')->insert([
            'province_name' => 'Arabia Nabatene',
            'region' => '36'
        ]);
        //173
        DB::table('provinces')->insert([
            'province_name' => 'Arabia Petraea',
            'region' => '36'
        ]);
        //174
        DB::table('provinces')->insert([
            'province_name' => 'Arabia Lihyan',
            'region' => '36'
        ]);
        //175
        DB::table('provinces')->insert([
            'province_name' => 'Arabia Kindah',
            'region' => '36'
        ]);
        //176
        DB::table('provinces')->insert([
            'province_name' => 'Arabia Gerrha',
            'region' => '36'
        ]);
    }
}
