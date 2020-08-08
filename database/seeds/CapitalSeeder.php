<?php

use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //latin
        //Rome, Roma
        DB::table('capitals')->insert([
            'realm' => '1',
            'town' => '1'
        ]);
        //Samnium, Beneventum
        DB::table('capitals')->insert([
            'realm' => '2',
            'town' => '21'
        ]);
        //Etruria, Florentia
        DB::table('capitals')->insert([
            'realm' => '3',
            'town' => '33'
        ]);
        //Umbria, Perusia
        DB::table('capitals')->insert([
            'realm' => '4',
            'town' => '25'
        ]);
        //Liguria, Genua
        DB::table('capitals')->insert([
            'realm' => '5',
            'town' => '49'
        ]);
        //celtic
        //cisalpina
        //Norici, Celeia
        DB::table('capitals')->insert([
            'realm' => '6',
            'town' => '73'
        ]);
        //Helvetii, Vindonissa
        DB::table('capitals')->insert([
            'realm' => '7',
            'town' => '87'
        ]);
        //Venetii
        DB::table('capitals')->insert([
            'realm' => '8',
            'town' => '79'
        ]);
        //Boii, Bononia
        DB::table('capitals')->insert([
            'realm' => '9',
            'town' => '47'
        ]);
        //Insubres, Mediolanum
        DB::table('capitals')->insert([
            'realm' => '10',
            'town' => '56'
        ]);
        //Taurini, Taurinorum
        DB::table('capitals')->insert([
            'realm' => '11',
            'town' => '54'
        ]);
        //Raeti, Vindelicorum
        DB::table('capitals')->insert([
            'realm' => '12',
            'town' => '65'
        ]);   
        //alpes
        //Vocontii, Ebrodunum
        DB::table('capitals')->insert([
            'realm' => '13',
            'town' => '81'
        ]);
        //Deciates, Cemelenum
        DB::table('capitals')->insert([
            'realm' => '14',
            'town' => '82'
        ]);   
        //gallia
        //Salluvi, Arelate
        DB::table('capitals')->insert([
            'realm' => '15',
            'town' => '91'
        ]);
        //Allobroges, Vienne
        DB::table('capitals')->insert([
            'realm' => '16',
            'town' => '95'
        ]);
        //Sequani, Vesontio
        DB::table('capitals')->insert([
            'realm' => '17',
            'town' => '86'
        ]);
        //Arverni, Gergovia
        DB::table('capitals')->insert([
            'realm' => '18',
            'town' => '115'
        ]);
        //Volcae, Tolosa
        DB::table('capitals')->insert([
            'realm' => '19',
            'town' => '107'
        ]);
        //Ausci, Auscorum
        DB::table('capitals')->insert([
            'realm' => '20',
            'town' => '119'
        ]);
        //Bituriges, Burdigala
        DB::table('capitals')->insert([
            'realm' => '21',
            'town' => '113'
        ]);
        //Lemovices
        DB::table('capitals')->insert([
            'realm' => '22',
            'town' => '114'
        ]);
        //Cadurci, Cadurcorum
        DB::table('capitals')->insert([
            'realm' => '23',
            'town' => '118'
        ]);
        //Redones, Condate
        DB::table('capitals')->insert([
            'realm' => '24',
            'town' => '122'
        ]);
        //Cenomani, Cenabum
        DB::table('capitals')->insert([
            'realm' => '25',
            'town' => '126'
        ]);
        //Parisii, Lutetia
        DB::table('capitals')->insert([
            'realm' => '26',
            'town' => '127'
        ]);
        //Haedui, Divio
        DB::table('capitals')->insert([
            'realm' => '27',
            'town' => '101'
        ]);
        //Lingones
        DB::table('capitals')->insert([
            'realm' => '28',
            'town' => '104'
        ]);
        //Treveri, Treverorum
        DB::table('capitals')->insert([
            'realm' => '29',
            'town' => '132'
        ]);
        //Senones, Agedincum
        DB::table('capitals')->insert([
            'realm' => '30',
            'town' => '130'
        ]);
        //Ambiani, Samarobriva
        DB::table('capitals')->insert([
            'realm' => '31',
            'town' => '129'
        ]);
        //Caletes, Rotomagus
        DB::table('capitals')->insert([
            'realm' => '32',
            'town' => '128'
        ]);
        //Remi, Durocorturum
        DB::table('capitals')->insert([
            'realm' => '33',
            'town' => '136'
        ]);
        //Atrebates, Nemetacum
        DB::table('capitals')->insert([
            'realm' => '34',
            'town' => '133'
        ]);
        //Eburones, Tungrorum
        DB::table('capitals')->insert([
            'realm' => '35',
            'town' => '137'
        ]);
        //Namnetes, Portus Namnetus
        DB::table('capitals')->insert([
            'realm' => '36',
            'town' => '121'
        ]);
        //Turones, Turonum 
        DB::table('capitals')->insert([
            'realm' => '37',
            'town' => '125'
        ]);
        //Pictones, Limonum 
        DB::table('capitals')->insert([
            'realm' => '38',
            'town' => '120'
        ]);
        /*
        //britannia
        //Durotriges
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Dumnonii
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Trinovantes
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Iceni
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Catuvellauni
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Ordovices
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Silures
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Demetae
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Cornovii
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Brigantes
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Caledonii
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Eblanii
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //hispania, celtiberian
        //Gallaeci
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Astures
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Cantabri
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Vaccaei
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Celtiberi
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Carpetani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Vettones
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Lusitani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Turduli
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Celtici
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //basque
        //Vascones
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //tartessian
        //Turdetani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //iberian
        //Ilergetae
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Ilercavones
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Edetani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Contestani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Oretani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Bastetani
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //germanic
        //Frisii
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Chauci
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Cherusci
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Chatti
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Tencteri
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Alemanes
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Marcomanni
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //Quadi
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => ''
        ]);
        //illyrian
        //Histria, Pola
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '358'
        ]);
        //Liburnia, Iadera
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '354'
        ]);
        //Dalmatia, Delminium
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '351'
        ]);
        //Dardania, Scupi
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '346'
        ]);
        //Vardaei, Doclea
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '348'
        ]);
        //Scordisci, Sirmium
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '361'
        ]);
        //Breuci, Siscia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '367'
        ]);
        //thracian
        //Dacia, Sarmizegetusa
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '376'
        ]);
        //punic
        //Carthage, Carthago
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '265'
        ]);
        //numidian
        //Numidia, Cirta
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '252'
        ]);
        //Mauretania, Volubilis
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '237'
        ]);
        //Garamantia, Germa
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '277'
        ]);
        //hellenic
        //Emporiae, Emporiae
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '182'
        ]);        
        //Massilia, Massilia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '90'
        ]);
        //Tarentum, Tarentum
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '15'
        ]);
        //Syracusae, Syracusae
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '39'
        ]);
        //Epirus, Ambracia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '323'
        ]);
        //Macedon, Pella
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '329'
        ]);
        //Aegyptus, Alexandria
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '284'
        ]);
        //Seleucid, Seleucia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '526'
        ]);
        //Bithynia, Nicomedia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '415'
        ]);
        //Caria, Halicarnassus
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '404'
        ]);
        //Cilicia, Tarsus
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '457'
        ]);
        //Odrysia, Philippopolis
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '338'
        ]);
        //Pergamon, Pergamum
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '408'
        ]);
        //Aetolia, Thermum
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '322'
        ]);
        //Achaea, Patrae
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '313'
        ]);
        //persian
        //Pontus, Sinope
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '420'
        ]);
        //Armenia, Artaxata
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '467'
        ]);
        //Parthia, Susa
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '495'
        ]);
        //arabic
        //Nabataea, Petra
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '579'
        ]);
        //Lihyan, Dedan
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '583'
        ]);
        //Main, Marib
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '598'
        ]);
        //Kindah, Hajr
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '593'
        ]);
        //Gerrha, Gerrha
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '595'
        ]);
        //Saba, Sanaa
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '599'
        ]);
        //scythian
        //Scythia, Tanais
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '396'
        ]);
        //sarmatian
        //Sarmatia, Olbia
        DB::table('capitals')->insert([
            'realm' => '',
            'town' => '395'
        ]);
        */
    
    }
}
