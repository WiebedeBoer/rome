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
        //Nitiobroges, Aginnum
        DB::table('capitals')->insert([
            'realm' => '20',
            'town' => '112'
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
        //britannia
        //Belgae, Aquae Sulis
        DB::table('capitals')->insert([
            'realm' => '39',
            'town' => '160'
        ]);
        //Dumnonii, Isca Dumnonum
        DB::table('capitals')->insert([
            'realm' => '40',
            'town' => '159'
        ]);
        //Dobunni, Glevum
        DB::table('capitals')->insert([
            'realm' => '41',
            'town' => '162'
        ]);
        //Silures, Isca Silurum
        DB::table('capitals')->insert([
            'realm' => '42',
            'town' => '163'
        ]);
        //Demetae, Moridunum
        DB::table('capitals')->insert([
            'realm' => '43',
            'town' => '164'
        ]);
        //Ordovices, Segontium
        DB::table('capitals')->insert([
            'realm' => '44',
            'town' => '165'
        ]);
        //Cornovii, Viroconium
        DB::table('capitals')->insert([
            'realm' => '45',
            'town' => '167'
        ]);
        //Regnenses, Portus Adurni
        DB::table('capitals')->insert([
            'realm' => '46',
            'town' => '168'
        ]);
        //Catuvellauni, Verulamium
        DB::table('capitals')->insert([
            'realm' => '47',
            'town' => '170'
        ]);
        //Trinovantes, Camulodunum
        DB::table('capitals')->insert([
            'realm' => '48',
            'town' => '171'
        ]);
        //Iceni, Icenorum
        DB::table('capitals')->insert([
            'realm' => '49',
            'town' => '172'
        ]);
        //Coritani, Lindum
        DB::table('capitals')->insert([
            'realm' => '50',
            'town' => '174'
        ]);
        //Brigantes, Eboracum
        DB::table('capitals')->insert([
            'realm' => '51',
            'town' => '175'
        ]);
        //Caledonii, Curia
        DB::table('capitals')->insert([
            'realm' => '52',
            'town' => '180'
        ]);
        //Eblanii, Eblana
        DB::table('capitals')->insert([
            'realm' => '53',
            'town' => '181'
        ]);
        //hispania, celtiberian
        //Gallaeci, Lucus
        DB::table('capitals')->insert([
            'realm' => '54',
            'town' => '218'
        ]);
        //Astures, Asturica
        DB::table('capitals')->insert([
            'realm' => '55',
            'town' => '217'
        ]);
        //Cantabri, Portus Victoriae
        DB::table('capitals')->insert([
            'realm' => '56',
            'town' => '190'
        ]);
        //Vaccaei, Pallantia
        DB::table('capitals')->insert([
            'realm' => '57',
            'town' => '193'
        ]);
        //Celtiberi, Ercavica
        DB::table('capitals')->insert([
            'realm' => '58',
            'town' => '201'
        ]);
        //Carpetani, Toletum
        DB::table('capitals')->insert([
            'realm' => '59',
            'town' => '212'
        ]);
        //Vettones, Caparra
        DB::table('capitals')->insert([
            'realm' => '60',
            'town' => '225'
        ]);
        //Lusitani, Aeminium
        DB::table('capitals')->insert([
            'realm' => '61',
            'town' => '222'
        ]);
        //Turduli, Segida
        DB::table('capitals')->insert([
            'realm' => '62',
            'town' => '227'
        ]);
        //Celtici, Ebora
        DB::table('capitals')->insert([
            'realm' => '63',
            'town' => '228'
        ]);
        //basque
        //Ausci, Auscorum
        DB::table('capitals')->insert([
            'realm' => '64',
            'town' => '119'
        ]);
        //Vascones, Pompaelo
        DB::table('capitals')->insert([
            'realm' => '65',
            'town' => '188'
        ]);
        //tartessian
        //Turdetani, Tartessus
        DB::table('capitals')->insert([
            'realm' => '66',
            'town' => '205'
        ]);
        //iberian
        //Oretani, Castulo
        DB::table('capitals')->insert([
            'realm' => '67',
            'town' => '210'
        ]);
        //Edetani, Valentia Edatonorum
        DB::table('capitals')->insert([
            'realm' => '68',
            'town' => '194'
        ]);
        //Ilercavones, Saguntum
        DB::table('capitals')->insert([
            'realm' => '69',
            'town' => '191'
        ]);
        //Ilergetae, Ilerda
        DB::table('capitals')->insert([
            'realm' => '70',
            'town' => '186'
        ]);
        //germanic
        //Frisii, Flevum
        DB::table('capitals')->insert([
            'realm' => '71',
            'town' => '142'
        ]);
        //Batavii, Portus Batavorum
        DB::table('capitals')->insert([
            'realm' => '72',
            'town' => '141'
        ]);
        //Chamavi, Noviomagus
        DB::table('capitals')->insert([
            'realm' => '73',
            'town' => ''
        ]);
        //Bructeri, Castra Vetera
        DB::table('capitals')->insert([
            'realm' => '74',
            'town' => '140'
        ]);
        //Cherusci, Aliso
        DB::table('capitals')->insert([
            'realm' => '75',
            'town' => '144'
        ]);
        //Chauci, Fabiranum
        DB::table('capitals')->insert([
            'realm' => '76',
            'town' => '153'
        ]);
        //Chatti, Mogontiacum
        DB::table('capitals')->insert([
            'realm' => '77',
            'town' => '147'
        ]);
        //Tencteri, Ubiorum
        DB::table('capitals')->insert([
            'realm' => '78',
            'town' => '143'
        ]);
        //Alemanes, Argentoratum
        DB::table('capitals')->insert([
            'realm' => '79',
            'town' => '146'
        ]);
        //Hermunduri, Bicurgium
        DB::table('capitals')->insert([
            'realm' => '80',
            'town' => '155'
        ]);
        //Marcomanni, Alcimoennis
        DB::table('capitals')->insert([
            'realm' => '81',
            'town' => '67'
        ]);
        //Quadi, Casurgis
        DB::table('capitals')->insert([
            'realm' => '82',
            'town' => '157'
        ]);
        //illyrian
        //Histria, Pola
        DB::table('capitals')->insert([
            'realm' => '83',
            'town' => '358'
        ]);
        //Liburnia, Iadera
        DB::table('capitals')->insert([
            'realm' => '84',
            'town' => '354'
        ]);
        //Dalmatia, Delminium
        DB::table('capitals')->insert([
            'realm' => '85',
            'town' => '351'
        ]);
        //Dardania, Scupi
        DB::table('capitals')->insert([
            'realm' => '86',
            'town' => '346'
        ]);
        //Vardaei, Doclea
        DB::table('capitals')->insert([
            'realm' => '87',
            'town' => '348'
        ]);
        //Scordisci, Sirmium
        DB::table('capitals')->insert([
            'realm' => '88',
            'town' => '361'
        ]);
        //Breuci, Siscia
        DB::table('capitals')->insert([
            'realm' => '90',
            'town' => '367'
        ]);
        //Hercuniates, Gorsium
        DB::table('capitals')->insert([
            'realm' => '90',
            'town' => '371'
        ]);
        //thracian
        //Dacia, Sarmizegetusa
        DB::table('capitals')->insert([
            'realm' => '91',
            'town' => '376'
        ]);
        //punic
        //Carthage, Carthago
        DB::table('capitals')->insert([
            'realm' => '92',
            'town' => '265'
        ]);
        //numidian
        //Numidia, Cirta
        DB::table('capitals')->insert([
            'realm' => '93',
            'town' => '252'
        ]);
        //Mauretania, Volubilis
        DB::table('capitals')->insert([
            'realm' => '94',
            'town' => '237'
        ]);
        //Garamantia, Germa
        DB::table('capitals')->insert([
            'realm' => '95',
            'town' => '277'
        ]);
        //greek colonies, hispania
        //Lucentum, Lucentum
        DB::table('capitals')->insert([
            'realm' => '96',
            'town' => '195'
        ]); 
        //Barcino, Barcino
        DB::table('capitals')->insert([
            'realm' => '97',
            'town' => '184'
        ]);
        //Emporiae, Emporiae
        DB::table('capitals')->insert([
            'realm' => '98',
            'town' => '182'
        ]);
        //greek colonies, gallia   
        //Agathe, Agathe
        DB::table('capitals')->insert([
            'realm' => '99',
            'town' => '111'
        ]);            
        //Massilia, Massilia
        DB::table('capitals')->insert([
            'realm' => '100',
            'town' => '90'
        ]);
        //greek colonies, italia
        //Neapolis, Neapolis
        DB::table('capitals')->insert([
            'realm' => '101',
            'town' => '7'
        ]);
        //Paestum, Paestum
        DB::table('capitals')->insert([
            'realm' => '102',
            'town' => '9'
        ]);
        //Crotona, Crotona
        DB::table('capitals')->insert([
            'realm' => '103',
            'town' => '13'
        ]);
        //Tarentum, Tarentum
        DB::table('capitals')->insert([
            'realm' => '104',
            'town' => '15'
        ]);
        //Messana, Messana
        DB::table('capitals')->insert([
            'realm' => '105',
            'town' => '41'
        ]);
        //Syracusae, Syracusae
        DB::table('capitals')->insert([
            'realm' => '106',
            'town' => '39'
        ]);
        //hellenic
        //Epirus, Ambracia
        DB::table('capitals')->insert([
            'realm' => '107',
            'town' => '323'
        ]);
        //Macedon, Pella
        DB::table('capitals')->insert([
            'realm' => '108',
            'town' => '329'
        ]);
        //Aegyptus, Alexandria
        DB::table('capitals')->insert([
            'realm' => '109',
            'town' => '284'
        ]);
        //Seleucid, Seleucia
        DB::table('capitals')->insert([
            'realm' => '110',
            'town' => '526'
        ]);
        //Bithynia, Nicomedia
        DB::table('capitals')->insert([
            'realm' => '111',
            'town' => '415'
        ]);
        //Caria, Halicarnassus
        DB::table('capitals')->insert([
            'realm' => '112',
            'town' => '404'
        ]);
        //Cilicia, Tarsus
        DB::table('capitals')->insert([
            'realm' => '113',
            'town' => '457'
        ]);
        //Odrysia, Philippopolis
        DB::table('capitals')->insert([
            'realm' => '114',
            'town' => '338'
        ]);
        //Pergamon, Pergamum
        DB::table('capitals')->insert([
            'realm' => '115',
            'town' => '408'
        ]);
        //Galatia, Ancyra
        DB::table('capitals')->insert([
            'realm' => '116',
            'town' => '443'
        ]);
        //Cappadocia,
        DB::table('capitals')->insert([
            'realm' => '117',
            'town' => '446'
        ]);
        //Aetolia, Thermum
        DB::table('capitals')->insert([
            'realm' => '118',
            'town' => '322'
        ]);
        //Achaea, Patrae
        DB::table('capitals')->insert([
            'realm' => '119',
            'town' => '313'
        ]);
        //armenian
        //Armenia, Artaxata
        DB::table('capitals')->insert([
            'realm' => '120',
            'town' => '467'
        ]);
        //kartvelian
        //Colchis, Phasis
        DB::table('capitals')->insert([
            'realm' => '121',
            'town' => '479'
        ]);
        //Iberia, Armazi
        DB::table('capitals')->insert([
            'realm' => '122',
            'town' => '480'
        ]);
        //gargarian
        //Albania
        DB::table('capitals')->insert([
            'realm' => '123',
            'town' => '482'
        ]);
        //pontic
        //Pontus, Sinope
        DB::table('capitals')->insert([
            'realm' => '124',
            'town' => '420'
        ]);
        //persian
        //Media Atropatene, Ganzak
        DB::table('capitals')->insert([
            'realm' => '125',
            'town' => '486'
        ]);
        //Parthia, Susa
        DB::table('capitals')->insert([
            'realm' => '126',
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
        
    
    }
}
