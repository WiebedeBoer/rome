<?php

use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        //religious no. 1
        //temples
        //diana, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '101'
        ]);
        //juno, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '103'
        ]);
        //jupiter, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '104'
        ]);
        //minerva, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '107'
        ]);
        ////saturnus, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '112'
        ]);
        ////vesta, roma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '1',
            'god' => '115'
        ]);
        //bellona, ostia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '2',
            'god' => '99'
        ]);
        //diana, lanuvium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '3',
            'god' => '101'
        ]);
        //juno, lanuvium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '3',
            'god' => '103'
        ]);
        //jupiter, pompei
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '8',
            'god' => '104'
        ]);
        //athena, Paestum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '9',
            'god' => '54'
        ]);
        //hera, Paestum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '9',
            'god' => '62'
        ]);
        //poseidon, Paestum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '9',
            'god' => '68'
        ]);
        //Crotona
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '13',
            'god' => '62'
        ]);
        //bellona, beneventum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '21',
            'god' => '99'
        ]);
        //poseidon, tarentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '15',
            'god' => '68'
        ]);
        //minerva, Perusia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '25',
            'god' => '107'
        ]);
        //juno, perusia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '25',
            'god' => '104'
        ]);
        //vulcan, perusia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '25',
            'god' => '116'
        ]);
        //ceres, gravisca
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '28',
            'god' => '100'
        ]);
        //jupiter, florentia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '33',
            'god' => '104'
        ]);
        //Asclepius, agrigentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '37',
            'god' => '53'
        ]);
        //Hephaestus, agrigentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '37',
            'god' => '61'
        ]);
        //Hera, agrigentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '37',
            'god' => '62'
        ]);
        //Heracles, agrigentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '37',
            'god' => '63'
        ]);
        //Zeus, agrigentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '37',
            'god' => '69'
        ]);
        //Apollo, syracusae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '39',
            'god' => '49'
        ]);
        //Artemis, syracusae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '39',
            'god' => '52'
        ]);
        //Demeter, syracusae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '39',
            'god' => '55'
        ]);
        //Apollo, Messana
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '41',
            'god' => '49'
        ]);
        //Cernunnos, Bononia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '47',
            'god' => '35'
        ]);
        //diana, genua
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '49',
            'god' => '101'
        ]);
        //Cernunnos, Taurinorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '54',
            'god' => '35'
        ]);
        //Belisama, Mediolanum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '56',
            'god' => '32'
        ]);
        //Hera, Neapolis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '7',
            'god' => '62'
        ]);
        //Epona, Vindelicorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '65',
            'god' => '38'
        ]);
        //Belisama, Alcimoennis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '67',
            'god' => '32'
        ]);
        //Sucellus, celeia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '73',
            'god' => '47'
        ]);
        //heracles, Acelum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '79',
            'god' => '63'
        ]);
        //Segomo, Ebrodunum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '81',
            'god' => '45'
        ]);
        //Sirona, Cemenelenum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '82',
            'god' => '46'
        ]);
        //Toutatis, Vesontio
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '86',
            'god' => '48'
        ]);
        //Cissonius, Vindonissa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '87',
            'god' => '36'
        ]);
        //artemis, Massilia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '90',
            'god' => '52'
        ]);
        //Sirona, Arelate
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '91',
            'god' => '46'
        ]);
        //lugus, valentia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '93',
            'god' => '42'
        ]);
        //Belisama, Vienne
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '95',
            'god' => '32'
        ]);
        //belisama, nemausus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '98',
            'god' => '32'
        ]);
        //lugus, Nemausus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '98',
            'god' => '42'
        ]); 
        //lugus, lugdunum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '99',
            'god' => '42'
        ]);
        //Epona, Divio
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '101',
            'god' => '38'
        ]);
        //Cissonius, Andematunnum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '104',
            'god' => '36'
        ]);
        //Belisama, Tolosa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '107',
            'god' => '32'
        ]);
        //Epona, Tolosa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '107',
            'god' => '38'
        ]);
        //Artemis, Agathe
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '111',
            'god' => '52'
        ]);
        //Rosmerta, Aginnum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '112',
            'god' => '44'
        ]);
        //Rosmerta, Burdigala
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '113',
            'god' => '44'
        ]);
        //Belisama, Augustoritum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '114',
            'god' => '32'
        ]);
        //Lugus, Gergovia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '115',
            'god' => '42'
        ]);
        //Cernunnos, Cadurcorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '118',
            'god' => '35'
        ]);
        //Epona, Auscorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '119',
            'god' => '38'
        ]);
        //Cernunnos, Limonum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '120',
            'god' => '35'
        ]);
        //Camulus, Portus Namnetus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '121',
            'god' => '34'
        ]);
        //Lugus, Condate
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '122',
            'god' => '42'
        ]);
        //Toutatis, Turonum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '125',
            'god' => '48'
        ]);
        //Cernunnos, Cenabum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '126',
            'god' => '35'
        ]);
        //Toutatis, Lutetia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '127',
            'god' => '48'
        ]);
        //Alauna, Rotomagus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '128',
            'god' => '28'
        ]);
        //lugus, Samarobriva
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '129',
            'god' => '42'
        ]);
        //toutatis, Samarobriva
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '129',
            'god' => '48'
        ]);
        //Epona, Agedincum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '130',
            'god' => '38'
        ]);
        //Borvo, Treverorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '132',
            'god' => '33'
        ]);
        //Lenus, Treverorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '132',
            'god' => '40'
        ]);
        //Belisama, Nemetacum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '133',
            'god' => '32'
        ]);
        //Camulus, Durocorturum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '136',
            'god' => '34'
        ]);
        //toutatis, tungrorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '137',
            'god' => '48'
        ]);
        //odin, Noviomagus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '139',
            'god' => '95'
        ]); 
        //eir, Castra Vetera
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '140',
            'god' => '88'
        ]);
        //nerthus, Portus Batavorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '141',
            'god' => '93'
        ]);
        //fosite, flevum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '142',
            'god' => '91'
        ]); 
        //thor, Ubiorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '143',
            'god' => '97'
        ]);
        //freia, Aliso
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '144',
            'god' => '89'
        ]);
        //freyr, Argentoratum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '146',
            'god' => '90'
        ]);
        //frigg, Argentoratum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '146',
            'god' => '92'
        ]);
        //eir, Mogontiacum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '147',
            'god' => '88'
        ]);
        //nerthus, mattium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '152',
            'god' => '93'
        ]); 
        //fosite, Fabiranum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '153',
            'god' => '91'
        ]);
        //njord, Fabiranum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '153',
            'god' => '94'
        ]);
        //odin, Bicurgium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '155',
            'god' => '95'
        ]);
        //ullr, Casurgis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '157',
            'god' => '96'
        ]);
        //lir, Isca Dumnoniorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '159',
            'god' => '41'
        ]);
        //belisama, Aquae Sulis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '160',
            'god' => '32'
        ]);
        //Cernunnos, Glevum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '162',
            'god' => '35'
        ]);
        //Lenus, Isca Silurum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '163',
            'god' => '40'
        ]);
        //Alauna, Moridunum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '164',
            'god' => '28'
        ]);
        //Belenus, Segontium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '165',
            'god' => '31'
        ]);
        //Aveta, Viroconium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '167',
            'god' => '30'
        ]);
        //Lir, Portus Adurni
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '168',
            'god' => '41'
        ]);
        //camulus, Verulamium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '170',
            'god' => '34'
        ]);
        //Toutatis,Camulodunum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '171',
            'god' => '48'
        ]);
        //lugus, icenorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '172',
            'god' => '42'
        ]);
        //Lugus, Lindum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '174',
            'god' => '42'
        ]);
        //Dis, Eboracum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '175',
            'god' => '37'
        ]);
        //lugus, luguvalium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '177',
            'god' => '34'
        ]);
        //Camulus, Curia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '180',
            'god' => '34'
        ]);
        //Epona, Eblana
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '181',
            'god' => '37'
        ]);
        //Artemis, Emporiae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '182',
            'god' => '52'
        ]);
        //Barcino
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '184',
            'god' => '53'
        ]);
        //Sucellus, Ilerda
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '186',
            'god' => '47'
        ]);
        //Cernunnos, Pompaelo
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '188',
            'god' => '35'
        ]);
        //Mari, Portus Victoriae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '190',
            'god' => '74'
        ]);
        //aphorodite, Saguntum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '191',
            'god' => '50'
        ]);
        //artemis, Saguntum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '191',
            'god' => '52'
        ]);
        //epona, pallantia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '193',
            'god' => '38'
        ]);
        //Mari, Valentia Edatonorum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '194',
            'god' => '74'
        ]);
        //apollo, Lucentum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '195',
            'god' => '49'
        ]);
        //Coventina, Ercavica
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '201',
            'god' => '71'
        ]);
        //Melqart, Tartessus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '205',
            'god' => '21'
        ]);
        //Reo, Castulo
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '210',
            'god' => '76'
        ]);
        //Epona, Toletum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '212',
            'god' => '38'
        ]);
        //Toutatis, Asturica
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '217',
            'god' => '48'
        ]);
        //lugus, lucus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '218',
            'god' => '42'
        ]); 
        //Cernunnos, Aeminium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '222',
            'god' => '35'
        ]);
        //Cernunnos, Caparra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '225',
            'god' => '35'
        ]);
        //Epona, Segida
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '227',
            'god' => '38'
        ]);
        //Endovelicus, Ebora
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '228',
            'god' => '73'
        ]); 
        //Isis, Volubilis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '237',
            'god' => '83'
        ]);
        //Amun, Cirta
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '252',
            'god' => '78'
        ]);
        //Kothar, thugga
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '262',
            'god' => '19'
        ]);
        //Nikkal, thugga
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '262',
            'god' => '24'
        ]);
        //Qetesh, thugga
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '262',
            'god' => '25'
        ]);
        //eshmun, utica
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '264',
            'god' => '17'
        ]);
        //baal, carthago
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '265',
            'god' => '15'
        ]);
        //Anqet, Germa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '277',
            'god' => '80'
        ]);
        //demeter, cyrene
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '280',
            'god' => '55'
        ]);
        //persephone, cyrene
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '280',
            'god' => '66'
        ]);
        //amun, ammonium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '283',
            'god' => '78'
        ]);
        //Alexandria
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '284',
            'god' => '58'
        ]);
        //Apollo, delos
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '306',
            'god' => '49'
        ]);
        //poseidon, rhodus (delubrum)
        DB::table('buildings')->insert([
            'buildingtype' => '6',
            'location' => '307',
            'god' => '68'
        ]); 
        //artemis, sparta
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '308',
            'god' => '52'
        ]);
        //asclepius, Messenia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '310',
            'god' => '53'
        ]);
        //zeus, olympia (delubrum)
        DB::table('buildings')->insert([
            'buildingtype' => '6',
            'location' => '312',
            'god' => '69'
        ]);
        //Dionysus, Patrae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '313',
            'god' => '56'
        ]);
        //hera, argos
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '314',
            'god' => '62'
        ]);
        //Apollo, corinthus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '315',
            'god' => '49'
        ]);
        //aphrodite, corinthus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '315',
            'god' => '50'
        ]);
        //poseidon, corinthus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '315',
            'god' => '68'
        ]);
        //athena, athenae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '316',
            'god' => '54'
        ]); 
        //dionysus, thebes
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '318',
            'god' => '56'
        ]);
        //Apollo, delphi
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '320',
            'god' => '49'
        ]);
        //apollo, Thermum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '322',
            'god' => '49'
        ]);
        //asclepius, ambracia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '323',
            'god' => '49'
        ]);
        //artemis, magnesia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '324',
            'god' => '52'
        ]);
        //asclepius, Epidaurus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '328',
            'god' => '53'
        ]);
        //Aphrodite, pella
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '329',
            'god' => '50'
        ]);
        //demeter, pella
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '329',
            'god' => '55'
        ]);
        //apollo, Philippopolis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '338',
            'god' => '49'
        ]);
        //Zalmoxis, noviodunum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '345',
            'god' => '142'
        ]);
        //Aphrodite, Scupi
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '346',
            'god' => '50'
        ]);
        //Silenus, Doclea
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '348',
            'god' => '140'
        ]);
        //Derzelas, Delminium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '351',
            'god' => '136'
        ]);
        //Silvanus, Iadera
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '354',
            'god' => '141'
        ]);
        //Bindus, Pola
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '358',
            'god' => '135'
        ]);
        //Sabazios, Sirmium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '361',
            'god' => '138'
        ]);
        //Semele, Siscia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '367',
            'god' => '139'
        ]);
        //Kotys, Gorsium
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '371',
            'god' => '137'
        ]);
        //Sabazios, Sarmizegetusa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '376',
            'god' => '138'
        ]);
        //Apollo, Olbia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '395',
            'god' => '49'
        ]);
        //Ares, Tanais
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '396',
            'god' => '51'
        ]);
        //Apollo, ephesus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '399',
            'god' => '49'
        ]);
        //artemis, ephesus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '399',
            'god' => '52'
        ]);
        //dionysus, ephesus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '399',
            'god' => '56'
        ]);
        //Apollo, miletus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '401',
            'god' => '49'
        ]);
        //aphrodite, Aphrodisias
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '402',
            'god' => '50'
        ]);
        //asclepius, halicarnassus
        DB::table('buildings')->insert([
            'buildingtype' => '8',
            'location' => '404',
            'god' => '53'
        ]); 
        //artemis, magnesia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '406',
            'god' => '52'
        ]); 
        //asclepius, pergamum
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '408',
            'god' => '53'
        ]);
        //Demeter, Nicomedia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '415',
            'god' => '55'
        ]);
        //Hades, Sinope
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '420',
            'god' => '58'
        ]);
        //Gaia, Ancyra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '443',
            'god' => '57'
        ]);
        //Gaia, Mazaca
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '446',
            'god' => '57'
        ]);
        //Zeus, Tarsus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '457',
            'god' => '69'
        ]);
        //anahita, Artaxata
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '467',
            'god' => '156'
        ]);
        //Thagimasidas, Phasis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '479',
            'god' => '130'
        ]);
        //Papaios, Armazi
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '480',
            'god' => '126'
        ]);
        //Faelvaera, Gabala
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '482',
            'god' => '123'
        ]);
        //Pirkusha, Ganzak
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '486',
            'god' => '149'
        ]);
        //hormazd, susa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '495',
            'god' => '154'
        ]);
        //hormazd, Pasargadae
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '501',
            'god' => '154'
        ]);
        //hormazd, persepolis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '502',
            'god' => '154'
        ]);
        //mithra, persepolis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '502',
            'god' => '155'
        ]);
        //anahita, persepolis
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '502',
            'god' => '156'
        ]);
        //artemis, Bactra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '514',
            'god' => '52'
        ]);
        //baal, Seleucia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '526',
            'god' => '15'
        ]);
        //mithra, dura europos
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '533',
            'god' => '155'
        ]);
        //apollo, Antiochia
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '551',
            'god' => '49'
        ]); 
        //abgal, palmyra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '555',
            'god' => '1'
        ]);
        //allat, palmyra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '555',
            'god' => '2'
        ]);
        //baal, damascus
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '556',
            'god' => '15'
        ]);
        //eshmun, sidon
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '562',
            'god' => '17'
        ]); 
        //yahweh, hierosolyma
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '567',
            'god' => '157'
        ]);
        //allat, bostra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '575',
            'god' => '2'
        ]);
        //Astarte, Petra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '579',
            'god' => '6'
        ]);
        //Dushara, Petra
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '579',
            'god' => '8'
        ]);
        //Almaqah, Dedan
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '583',
            'god' => '3'
        ]);
        //Ninurta, Hajr
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '593',
            'god' => '12'
        ]);
        //aluzza, makkah
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '589',
            'god' => '4'
        ]);
        //allat, taif
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '591',
            'god' => '2'
        ]); 
        //allat, Gerrha
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '595',
            'god' => '2'
        ]);
        //Almaqah, Marib
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '598',
            'god' => '3'
        ]);
        //talab, Sanaa
        DB::table('buildings')->insert([
            'buildingtype' => '4',
            'location' => '599',
            'god' => '13'
        ]);

        //mausoleum
        //halicarnassus
        DB::table('buildings')->insert([
            'buildingtype' => '8',
            'location' => '404'
        ]); 

        //groves
        //diana, lanuvium
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '3',
            'god' => '101'
        ]);
        //lugus, valentia
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '93',
            'god' => '42'
        ]);
        //lugus, Nemausus
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '98',
            'god' => '42'
        ]); 
        //lugus, Nemetacum
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '133',
            'god' => '42'
        ]); 
        //odin, Noviomagus
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '139',
            'god' => '95'
        ]); 
        //fosite, flevum
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '142',
            'god' => '91'
        ]); 
        //nerthus, mattium
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '152',
            'god' => '93'
        ]); 
        //lugus, lucus
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '218',
            'god' => '42'
        ]); 
        //athena, athenae
        DB::table('buildings')->insert([
            'buildingtype' => '9',
            'location' => '218',
            'god' => '54'
        ]); 

        //oracles
        //diana, lanuvium
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '3',
            'god' => '101'
        ]);
        //Endovelicus, ebora
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '228',
            'god' => '73'
        ]);
        //amun, ammonium
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '283',
            'god' => '78'
        ]);
        //apollo, delphi
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '320',
            'god' => '49'
        ]);
        //asclepius, ambracia
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '323',
            'god' => '49'
        ]);
        //apollo, ephesus
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '399',
            'god' => '49'
        ]);
        //apollo, miletus
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '401',
            'god' => '49'
        ]);
        //talab, Sanaa
        DB::table('buildings')->insert([
            'buildingtype' => '10',
            'location' => '599',
            'god' => '13'
        ]);

        //treasuries
        ////saturnus, roma
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '1',
            'god' => '112'
        ]);
        //Hera, Neapolis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '7',
            'god' => '62'
        ]);
        //poseidon, Paestum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '9',
            'god' => '68'
        ]);
        //Crotona
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '13',
            'god' => '62'
        ]);
        //Poseidon, Tarentum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '15',
            'god' => '68'
        ]);
        //bellona, beneventum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '21',
            'god' => '99'
        ]);
        //juno, perusia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '25',
            'god' => '104'
        ]);
        //jupiter, florentia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '33',
            'god' => '104'
        ]);
        //demeter, syracusae
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '39',
            'god' => '55'
        ]);
        //Apollo, Messana
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '41',
            'god' => '49'
        ]);
        //Cernunnos, Bononia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '47',
            'god' => '35'
        ]);
        //diana, genua
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '49',
            'god' => '101'
        ]);
        //Cernunnos, Taurinorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '54',
            'god' => '35'
        ]);
        //Belisama, Mediolanum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '56',
            'god' => '32'
        ]);
        //Epona, Vindelicorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '65',
            'god' => '38'
        ]);
        //Belisama, Alcimoennis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '67',
            'god' => '32'
        ]);
        //Sucellus, celeia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '73',
            'god' => '47'
        ]);
        //heracles, Acelum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '79',
            'god' => '63'
        ]);
        //Segomo, Ebrodunum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '81',
            'god' => '45'
        ]);
        //Sirona, Cemenelenum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '82',
            'god' => '46'
        ]);
        //Toutatis, Vesontio
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '86',
            'god' => '48'
        ]);
        //Cissonius, Vindonissa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '87',
            'god' => '36'
        ]);
        //Artemis, Massilia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '90',
            'god' => '52'
        ]);
        //Sirona, Arelate
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '91',
            'god' => '46'
        ]);
        //Belisama, Vienne
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '95',
            'god' => '32'
        ]);
        //Epona, Divio
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '101',
            'god' => '38'
        ]);
        //Cissonius, Andematunnum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '104',
            'god' => '36'
        ]);
        //Belisama, Tolosa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '107',
            'god' => '32'
        ]);
        //Artemis, Agathe
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '111',
            'god' => '52'
        ]);
        //Rosmerta, Aginnum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '112',
            'god' => '44'
        ]);
        //Rosmerta, Burdigala
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '113',
            'god' => '44'
        ]);
        //Belisama, Augustoritum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '114',
            'god' => '32'
        ]);
        //Lugus, Gergovia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '115',
            'god' => '42'
        ]);
        //Cernunnos, Cadurcorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '118',
            'god' => '35'
        ]);
        //Epona, Auscorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '119',
            'god' => '38'
        ]);
        //Cernunnos, Limonum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '120',
            'god' => '35'
        ]);
        //Camulus, Portus Namnetus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '121',
            'god' => '34'
        ]);
        //Lugus, Condate
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '122',
            'god' => '42'
        ]);
        //Toutatis, Turonum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '125',
            'god' => '48'
        ]);
        //Cernunnos, Cenabum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '126',
            'god' => '35'
        ]);
        //Toutatis, Lutetia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '127',
            'god' => '48'
        ]);
        //Alauna, Rotomagus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '128',
            'god' => '28'
        ]);
        //lugus, Samarobriva
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '129',
            'god' => '42'
        ]);
        //Epona, Agedincum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '130',
            'god' => '38'
        ]);
        //Lenus, Treverorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '132',
            'god' => '40'
        ]);
        //Belisama, Nemetacum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '133',
            'god' => '32'
        ]);
        //Camulus, Durocorturum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '136',
            'god' => '34'
        ]);
        //Toutatis,Tungrorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '137',
            'god' => '48'
        ]);
        //Odin, Noviomagus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '139',
            'god' => '95'
        ]);

        //eir, Castra Vetera
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '140',
            'god' => '88'
        ]);
        //nerthus, Portus Batavorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '141',
            'god' => '93'
        ]);
        //nerthus, Flevum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '142',
            'god' => '91'
        ]);
        //thor, Ubiorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '143',
            'god' => '97'
        ]);
        //freia, Aliso
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '144',
            'god' => '89'
        ]);
        //freyr, Argentoratum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '146',
            'god' => '90'
        ]);
        //eir, Mogontiacum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '147',
            'god' => '88'
        ]);
        //njord, Fabiranum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '153',
            'god' => '94'
        ]);
        //odin, Bicurgium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '155',
            'god' => '95'
        ]);
        //ullr, Casurgis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '157',
            'god' => '96'
        ]);
        //lir, Isca Dumnoniorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '159',
            'god' => '41'
        ]);
        //Belisama, Aquae Sulis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '160',
            'god' => '32'
        ]);
        //Cernunnos, Glevum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '162',
            'god' => '35'
        ]);
        //Lenus, Isca Silurum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '163',
            'god' => '40'
        ]);

        //Alauna, Moridunum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '164',
            'god' => '28'
        ]);
        //Belenus, Segontium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '165',
            'god' => '31'
        ]);
        //Aveta, Viroconium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '167',
            'god' => '30'
        ]);
        //Lir, Portus Adurni
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '168',
            'god' => '41'
        ]);
        //camulus, Verulamium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '170',
            'god' => '34'
        ]);
        //Toutatis,Camulodunum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '171',
            'god' => '48'
        ]);
        //lugus, Icenorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '172',
            'god' => '42'
        ]);
        //Lugus, Lindum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '174',
            'god' => '42'
        ]);
        //Dis, Eboracum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '175',
            'god' => '37'
        ]);
        //Camulus, Curia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '180',
            'god' => '34'
        ]);
        //Epona, Eblana
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '181',
            'god' => '37'
        ]);

        //Artemis, Emporiae
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '182',
            'god' => '52'
        ]);
        //Barcino
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '184',
            'god' => '53'
        ]);
        //Sucellus, Ilerda
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '186',
            'god' => '47'
        ]);
        //Cernunnos, Pompaelo
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '188',
            'god' => '35'
        ]);
        //Mari, Portus Victoriae
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '190',
            'god' => '74'
        ]);
        //artemis, Saguntum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '191',
            'god' => '52'
        ]);
        //epona, Pallantia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '193',
            'god' => '38'
        ]);
        //Mari, Valentia Edatonorum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '194',
            'god' => '74'
        ]);
        //apollo, Lucentum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '195',
            'god' => '49'
        ]);
        //Coventina, Ercavica
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '201',
            'god' => '71'
        ]);
        //Melqart, Tartessus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '205',
            'god' => '21'
        ]);
        //Reo, Castulo
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '210',
            'god' => '76'
        ]);
        //Epona, Toletum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '212',
            'god' => '38'
        ]);
        //Toutatis, Asturica
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '217',
            'god' => '48'
        ]);
        //lugus, Lucus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '218',
            'god' => '42'
        ]);
        //Cernunnos, Aeminium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '222',
            'god' => '35'
        ]);
        //Cernunnos, Caparra
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '225',
            'god' => '35'
        ]);
        //Epona, Segida
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '227',
            'god' => '38'
        ]);
        //Endovelicus, Ebora
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '228',
            'god' => '73'
        ]);
        //Isis, Volubilis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '237',
            'god' => '83'
        ]);
        //Amun, Cirta
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '252',
            'god' => '78'
        ]);
        //baal, Carthago
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '265',
            'god' => '15'
        ]);
        //Anqet, Germa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '277',
            'god' => '80'
        ]);
        //Hades, Alexandria
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '284',
            'god' => '58'
        ]);
        //Dionysus, Patrae
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '313',
            'god' => '56'
        ]);
        //apollo, Thermum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '322',
            'god' => '49'
        ]);
        //asclepius, Ambracia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '323',
            'god' => '53'
        ]);
        //Aphrodite, Pella
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '329',
            'god' => '50'
        ]);
        //apollo, Philippopolis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '338',
            'god' => '49'
        ]);
        //Aphrodite, Scupi
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '346',
            'god' => '50'
        ]);
        //Silenus, Doclea
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '348',
            'god' => '140'
        ]);
        //Derzelas, Delminium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '351',
            'god' => '136'
        ]);
        //Silvanus, Iadera
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '354',
            'god' => '141'
        ]);
        //Bindus, Pola
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '358',
            'god' => '135'
        ]);
        //Sabazios, Sirmium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '361',
            'god' => '138'
        ]);
        //Semele, Siscia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '367',
            'god' => '139'
        ]);
        //Kotys, Gorsium
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '371',
            'god' => '137'
        ]);
        //Sabazios, Sarmizegetusa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '376',
            'god' => '138'
        ]);
        //Apollo, Olbia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '395',
            'god' => '49'
        ]);
        //Ares, Tanais
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '396',
            'god' => '51'
        ]);
        //asclepius, Halicarnassus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '404',
            'god' => '53'
        ]);
        //asclepius, Pergamum
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '408',
            'god' => '53'
        ]);
        //Demeter, Nicomedia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '415',
            'god' => '55'
        ]);
        //Hades, Sinope
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '420',
            'god' => '58'
        ]);
        //Gaia, Ancyra
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '443',
            'god' => '57'
        ]);
        //Gaia, Mazaca
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '446',
            'god' => '57'
        ]);
        //Zeus, Tarsus
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '457',
            'god' => '69'
        ]);
        //anahita, Artaxata
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '467',
            'god' => '156'
        ]);
        //Thagimasidas, Phasis
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '479',
            'god' => '130'
        ]);
        //Papaios, Armazi
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '480',
            'god' => '126'
        ]);
        //Faelvaera, Gabala
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '482',
            'god' => '123'
        ]);
        //Pirkusha, Ganzak
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '486',
            'god' => '149'
        ]);
        //hormazd, Susa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '495',
            'god' => '154'
        ]);
        //artemis, Bactra
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '514',
            'god' => '52'
        ]);
        //baal, Seleucia
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '526',
            'god' => '15'
        ]);
        //Yahweh, Hierosolyma
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '567',
            'god' => '157'
        ]);
        //Astarte, Petra
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '579',
            'god' => '6'
        ]);
        //Almaqah, Dedan
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '583',
            'god' => '3'
        ]);
        //Ninurta, Hajr
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '593',
            'god' => '12'
        ]);
        //allat, Gerrha
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '595',
            'god' => '2'
        ]);
        //Almaqah, Marib
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '598',
            'god' => '3'
        ]);
        //talab, Sanaa
        DB::table('buildings')->insert([
            'buildingtype' => '11',
            'location' => '599',
            'god' => '13'
        ]);
 
        //baths no. 2
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '38'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '39'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '42'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '82'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '96'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '127'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '128'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '132'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '138'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '160'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '167'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '173'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '183'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '184'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '219'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '257'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '262'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '265'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '310'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '314'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '316'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '329'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '332'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '341'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '342'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '353'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '365'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '366'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '379'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '398'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '565'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '569'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '570'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '572'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '12',
            'location' => '578'
        ]); 
        //education no. 3
        //libraries
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '258'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '284'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '307'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '316'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '399'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '408'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '14',
            'location' => '551'
        ]); 
        //academies
        DB::table('buildings')->insert([
            'buildingtype' => '15',
            'location' => '316'
        ]);
        //theatres no. 4
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '39'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '291'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '307'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '308'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '314'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '318'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '319'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '323'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '331'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '335'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '343'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '398'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '401'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '410'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '411'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '412'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '414'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '424'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '427'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '430'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '433'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '434'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '17',
            'location' => '577'
        ]); 
        //amphitheatres no. 5
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '1'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '3'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '5'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '6'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '7'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '8'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '29'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '33'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '55'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '56'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '18',
            'location' => '77'
        ]);
        //racetracks no. 6
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '171'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '185'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '191'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '209'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '212'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '222'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '225'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '226'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '227'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '229'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '230'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '244'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '247'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '262'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '264'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '312'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '315'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '330'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '337'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '415'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '551'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '559'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '20',
            'location' => '572'
        ]); 
        //ports no. 7
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '2'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '4'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '8'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '14'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '16'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '17'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '20'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '26'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '28'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '29'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '34'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '35'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '36'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '37'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '38'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '40'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '42'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '43'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '44'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '45'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '46'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '50'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '80'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '89'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '105'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '135'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '154'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '196'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '202'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '203'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '204'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '221'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '223'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '224'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '229'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '230'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '231'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '232'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '233'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '234'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '235'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '236'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '238'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '240'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '241'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '244'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '245'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '246'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '248'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '249'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '263'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '264'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '266'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '267'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '271'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '272'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '273'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '274'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '275'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '279'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '280'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '281'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '282'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '285'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '289'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '291'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '300'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '301'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '302'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '303'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '304'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '305'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '306'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '307'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '309'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '314'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '315'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '317'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '321'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '324'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '327'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '328'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '330'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '335'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '336'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '341'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '342'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '343'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '349'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '350'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '354'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '356'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '357'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '390'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '391'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '392'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '393'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '394'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '397'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '398'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '401'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '409'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '410'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '411'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '416'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '419'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '436'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '438'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '439'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '440'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '441'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '453'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '454'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '455'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '459'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '477'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '478'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '552'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '558'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '559'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '560'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '561'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '562'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '570'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '571'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '572'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '588'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '590'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '596'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '597'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '21',
            'location' => '602'
            ]); 
        //fortification no. 8
        //gates
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '2'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '5'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '6'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '8'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '12'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '16'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '21'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '24'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '26'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '30'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '31'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '35'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '36'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '37'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '40'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '46'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '48'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '51'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '61'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '62'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '63'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '64'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '69'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '70'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '76'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '77'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '78'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '93'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '97'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '99'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '103'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '105'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '106'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '115'
            ]);
            DB::table('buildings')->insert([
                'buildingtype' => '23',
                'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '138'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '145'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '148'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '149'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '150'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '151'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '152'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '176'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '177'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '178'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '179'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '196'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '203'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '204'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '206'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '209'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '213'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '215'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '216'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '226'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '234'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '235'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '236'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '239'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '241'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '242'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '244'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '245'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '247'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '253'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '254'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '259'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '264'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '266'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '269'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '270'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '271'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '296'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '314'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '315'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '317'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '318'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '330'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '339'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '341'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '342'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '343'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '344'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '345'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '347'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '349'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '350'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '355'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '356'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '357'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '359'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '362'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '364'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '372'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '373'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '374'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '375'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '377'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '380'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '381'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '383'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '384'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '385'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '387'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '388'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '389'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '390'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '391'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '393'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '394'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '398'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '401'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '405'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '414'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '419'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '430'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '434'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '438'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '440'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '464'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '472'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '473'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '474'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '475'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '487'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '488'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '489'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '491'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '510'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '512'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '513'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '515'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '516'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '517'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '518'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '519'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '520'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '523'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '524'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '528'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '529'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '530'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '538'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '541'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '542'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '543'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '544'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '545'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '546'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '547'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '551'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '556'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '559'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '560'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '562'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '563'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '569'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '23',
            'location' => '572'
            ]); 

        //commerce no. 11
        //mansio
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '3'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '94'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '164'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '197'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '340'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '352'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '369'
        ]);
        DB::table('buildings')->insert([
            'buildingtype' => '36',
            'location' => '372'
        ]);
        //importers (silk, incense, spices, ivory)
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '243'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '253'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '257'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '258'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '259'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '260'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '276'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '278'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '279'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '280'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '283'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '296'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '297'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '298'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '299'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '300'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '301'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '304'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '305'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '397'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '481'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '487'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '488'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '489'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '490'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '491'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '492'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '493'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '494'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '496'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '497'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '498'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '499'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '500'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '501'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '502'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '503'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '504'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '505'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '506'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '507'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '508'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '509'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '510'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '511'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '512'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '513'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '515'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '516'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '517'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '518'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '519'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '520'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '551'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '555'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '564'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '565'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '575'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '576'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '577'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '578'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '580'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '581'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '582'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '583'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '584'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '585'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '586'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '587'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '588'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '589'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '590'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '591'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '592'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '594'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '596'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '597'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '600'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '601'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '40',
            'location' => '602'
            ]);       
        //trade ground (addition) no.13
        //slave markets
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '262'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '297'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '306'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '48',
            'location' => '479'
            ]); 
        //markets
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '2'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '3'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '4'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '5'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '6'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '8'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '10'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '11'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '12'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '14'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '16'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '17'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '18'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '19'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '20'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '21'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '22'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '23'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '24'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '26'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '27'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '28'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '29'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '30'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '31'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '34'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '35'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '36'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '37'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '38'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '40'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '42'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '43'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '44'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '45'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '46'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '48'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '50'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '51'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '52'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '53'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '55'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '57'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '58'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '59'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '60'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '61'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '62'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '63'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '64'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '66'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '67'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '69'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '70'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '71'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '72'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '74'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '75'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '76'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '77'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '78'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '79'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '80'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '81'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '82'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '83'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '84'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '85'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '88'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '89'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '92'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '93'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '94'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '95'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '96'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '97'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '98'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '99'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '100'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '101'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '102'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '103'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '105'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '106'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '108'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '109'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '110'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '112'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '114'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '115'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '116'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '117'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '118'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '119'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '120'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '122'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '123'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '124'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '125'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '128'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '129'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '130'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '131'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '133'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '134'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '135'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '136'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '137'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '138'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '145'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '148'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '149'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '150'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '151'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '152'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '154'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '155'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '156'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '157'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '158'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '160'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '161'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '170'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '173'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '176'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '177'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '178'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '179'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '183'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '186'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '187'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '189'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '192'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '193'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '196'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '197'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '198'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '199'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '200'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '201'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '202'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '203'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '204'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '206'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '207'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '208'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '209'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '211'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '213'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '214'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '215'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '216'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '218'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '219'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '220'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '221'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '222'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '223'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '224'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '225'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '226'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '227'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '228'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '229'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '230'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '231'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '232'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '233'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '234'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '235'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '236'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '238'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '239'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '240'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '241'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '242'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '243'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '244'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '245'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '246'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '247'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '248'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '249'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '250'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '251'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '253'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '254'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '255'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '256'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '257'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '258'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '259'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '260'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '261'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '262'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '263'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '264'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '266'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '267'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '268'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '269'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '270'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '271'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '272'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '273'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '274'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '275'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '276'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '278'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '279'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '280'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '281'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '282'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '283'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '285'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '286'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '287'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '288'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '289'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '290'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '291'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '292'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '293'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '294'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '295'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '296'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '297'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '298'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '299'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '300'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '301'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '302'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '303'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '304'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '305'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '306'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '307'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '308'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '309'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '310'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '311'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '312'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '314'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '315'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '317'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '318'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '319'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '320'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '321'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '322'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '324'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '325'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '326'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '327'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '328'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '330'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '331'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '332'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '333'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '334'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '335'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '336'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '339'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '340'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '341'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '342'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '343'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '344'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '345'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '347'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '348'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '349'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '350'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '351'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '352'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '353'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '354'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '355'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '356'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '357'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '359'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '360'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '362'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '363'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '364'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '365'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '366'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '367'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '368'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '369'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '371'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '372'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '373'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '374'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '375'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '377'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '378'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '379'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '380'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '381'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '382'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '383'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '384'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '385'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '386'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '387'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '388'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '389'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '390'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '391'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '392'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '393'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '394'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '397'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '398'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '400'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '401'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '402'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '403'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '405'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '406'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '407'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '409'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '410'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '411'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '414'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '416'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '417'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '418'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '419'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '421'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '422'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '423'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '424'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '425'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '426'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '427'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '428'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '429'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '430'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '431'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '432'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '433'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '434'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '435'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '436'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '437'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '438'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '439'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '440'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '441'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '442'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '443'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '444'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '445'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '446'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '447'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '448'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '449'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '450'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '451'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '452'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '453'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '454'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '455'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '456'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '458'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '459'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '460'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '461'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '462'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '463'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '464'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '465'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '466'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '468'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '469'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '470'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '471'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '472'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '473'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '474'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '475'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '476'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '477'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '478'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '480'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '481'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '483'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '484'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '485'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '487'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '488'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '489'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '490'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '491'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '492'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '493'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '494'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '496'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '497'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '498'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '499'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '500'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '501'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '502'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '503'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '504'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '505'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '506'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '507'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '508'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '509'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '510'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '511'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '512'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '513'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '515'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '516'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '517'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '518'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '519'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '520'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '521'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '522'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '523'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '524'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '525'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '527'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '528'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '529'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '530'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '531'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '532'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '533'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '534'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '535'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '536'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '537'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '538'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '539'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '540'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '541'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '542'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '543'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '544'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '545'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '546'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '547'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '548'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '549'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '550'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '551'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '552'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '553'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '554'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '555'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '556'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '557'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '558'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '559'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '560'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '561'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '562'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '563'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '564'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '565'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '566'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '568'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '569'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '570'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '571'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '572'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '573'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '574'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '575'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '576'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '577'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '578'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '580'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '581'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '582'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '583'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '584'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '585'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '586'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '587'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '588'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '589'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '590'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '591'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '592'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '594'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '596'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '597'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '600'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '601'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '49',
            'location' => '602'
            ]); 
        //municipal no. 14
        //records office (realm capital)
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '21'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '79'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '81'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '82'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '95'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '115'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '112'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '114'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '118'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '122'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '101'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '130'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '129'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '128'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '136'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '133'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '137'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '125'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '120'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '160'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '170'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '218'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '193'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '201'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '225'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '222'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '227'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '228'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '119'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '186'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '155'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '67'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '157'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '354'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '351'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '348'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '367'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '371'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '443'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '446'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '322'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '480'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '583'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '50',
            'location' => '396'
            ]); 
        //speaker platform (realm capital)
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '21'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '79'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '81'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '82'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '95'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '115'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '112'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '114'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '118'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '122'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '101'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '130'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '129'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '128'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '136'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '133'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '137'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '125'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '120'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '160'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '170'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '218'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '193'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '201'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '225'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '222'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '227'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '228'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '119'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '186'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '155'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '67'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '157'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '354'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '351'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '348'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '367'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '371'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '443'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '446'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '322'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '480'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '583'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '51',
            'location' => '396'
            ]); 
        //industrial no. 15
        //mines
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '11'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '12'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '22'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '36'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '42'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '43'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '55'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '59'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '60'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '62'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '63'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '66'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '67'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '69'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '71'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '72'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '74'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '77'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '105'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '112'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '116'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '122'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '131'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '145'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '176'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '178'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '183'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '186'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '187'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '189'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '192'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '193'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '196'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '197'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '198'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '200'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '202'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '209'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '211'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '213'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '214'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '215'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '216'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '218'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '219'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '220'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '226'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '230'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '232'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '236'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '239'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '242'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '243'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '244'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '247'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '250'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '251'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '253'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '257'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '258'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '259'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '260'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '262'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '266'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '268'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '270'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '276'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '278'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '279'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '280'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '281'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '282'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '283'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '288'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '291'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '293'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '298'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '299'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '300'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '301'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '302'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '303'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '304'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '305'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '307'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '325'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '330'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '331'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '332'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '333'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '334'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '335'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '339'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '347'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '348'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '349'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '350'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '355'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '356'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '367'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '371'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '374'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '384'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '385'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '387'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '388'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '391'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '392'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '405'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '423'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '433'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '442'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '446'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '447'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '448'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '449'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '450'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '451'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '452'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '456'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '458'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '460'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '461'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '462'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '463'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '471'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '472'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '473'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '474'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '475'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '476'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '477'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '478'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '480'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '481'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '487'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '502'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '511'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '512'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '515'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '516'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '530'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '537'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '538'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '540'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '541'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '542'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '544'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '556'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '584'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '585'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '594'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '596'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '52',
            'location' => '601'
            ]); 
        //claypits
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '2'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '3'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '6'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '8'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '10'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '14'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '16'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '18'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '19'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '23'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '27'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '28'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '29'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '30'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '31'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '34'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '35'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '37'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '38'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '40'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '48'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '51'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '52'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '53'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '55'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '57'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '60'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '61'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '62'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '63'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '64'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '66'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '70'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '71'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '74'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '75'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '76'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '77'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '79'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '84'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '85'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '88'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '92'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '93'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '94'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '95'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '96'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '97'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '98'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '99'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '100'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '101'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '102'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '103'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '109'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '110'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '114'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '120'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '123'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '125'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '128'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '129'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '130'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '131'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '133'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '134'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '136'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '137'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '138'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '145'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '148'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '149'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '150'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '151'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '152'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '154'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '155'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '156'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '157'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '158'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '160'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '161'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '170'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '173'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '176'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '177'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '178'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '179'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '183'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '187'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '189'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '201'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '204'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '206'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '207'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '208'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '209'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '211'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '219'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '220'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '221'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '222'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '223'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '224'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '228'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '229'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '245'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '247'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '254'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '255'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '256'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '261'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '263'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '264'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '285'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '286'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '287'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '288'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '289'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '290'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '292'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '293'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '294'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '295'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '296'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '297'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '302'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '303'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '308'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '309'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '310'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '311'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '312'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '314'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '315'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '317'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '318'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '319'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '320'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '321'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '322'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '324'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '339'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '340'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '341'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '342'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '343'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '344'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '345'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '351'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '352'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '353'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '359'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '360'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '362'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '363'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '364'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '365'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '366'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '368'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '369'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '372'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '373'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '374'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '375'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '377'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '378'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '379'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '380'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '381'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '382'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '385'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '386'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '387'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '388'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '389'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '393'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '394'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '397'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '398'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '400'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '401'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '402'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '403'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '405'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '406'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '424'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '425'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '427'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '428'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '430'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '443'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '452'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '455'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '458'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '459'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '465'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '466'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '473'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '483'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '484'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '488'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '489'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '496'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '506'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '509'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '510'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '513'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '521'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '522'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '523'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '524'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '525'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '527'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '528'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '529'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '530'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '531'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '532'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '533'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '534'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '535'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '536'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '538'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '540'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '541'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '542'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '543'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '544'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '547'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '548'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '549'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '550'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '553'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '554'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '557'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '568'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '573'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '574'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '53',
            'location' => '601'
            ]); 
        //quarries
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '30'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '31'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '34'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '58'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '267'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '271'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '336'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '357'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '377'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '402'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '414'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '423'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '429'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '431'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '432'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '54',
            'location' => '433'
            ]); 
        //sawmills
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '1'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '2'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '3'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '4'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '5'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '6'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '7'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '8'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '9'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '10'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '11'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '12'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '13'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '14'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '15'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '16'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '17'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '18'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '19'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '20'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '21'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '22'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '23'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '24'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '25'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '26'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '27'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '28'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '29'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '30'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '31'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '32'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '33'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '34'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '35'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '36'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '37'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '38'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '39'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '40'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '41'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '42'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '43'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '44'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '45'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '46'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '47'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '48'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '49'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '50'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '51'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '52'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '53'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '54'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '55'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '56'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '57'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '58'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '59'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '60'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '61'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '62'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '63'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '64'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '65'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '66'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '67'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '68'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '69'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '70'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '71'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '72'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '73'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '74'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '75'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '76'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '77'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '78'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '79'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '80'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '81'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '82'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '83'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '84'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '85'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '86'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '87'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '88'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '89'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '90'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '91'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '92'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '93'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '94'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '95'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '96'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '97'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '98'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '99'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '100'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '101'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '102'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '103'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '104'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '105'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '106'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '107'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '108'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '109'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '110'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '111'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '112'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '113'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '114'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '115'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '116'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '117'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '118'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '119'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '120'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '121'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '122'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '123'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '124'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '125'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '126'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '127'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '128'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '129'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '130'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '131'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '132'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '133'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '134'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '135'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '136'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '137'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '138'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '139'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '140'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '141'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '142'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '143'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '144'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '145'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '146'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '147'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '148'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '149'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '150'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '151'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '152'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '153'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '154'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '155'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '156'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '157'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '158'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '159'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '160'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '161'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '162'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '163'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '164'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '165'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '166'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '167'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '168'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '169'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '170'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '171'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '172'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '173'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '174'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '175'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '176'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '177'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '178'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '179'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '180'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '181'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '182'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '183'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '184'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '185'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '186'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '187'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '188'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '189'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '190'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '191'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '192'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '193'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '194'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '195'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '196'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '197'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '198'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '199'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '200'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '201'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '202'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '203'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '204'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '205'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '206'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '207'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '208'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '209'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '210'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '211'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '212'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '213'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '214'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '215'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '216'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '217'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '218'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '219'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '220'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '221'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '222'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '223'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '224'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '225'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '226'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '227'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '228'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '229'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '230'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '231'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '232'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '233'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '234'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '235'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '236'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '237'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '238'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '239'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '240'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '241'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '242'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '243'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '244'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '245'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '246'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '247'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '248'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '249'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '250'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '251'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '252'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '253'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '254'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '255'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '256'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '257'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '258'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '259'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '260'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '261'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '262'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '263'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '264'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '265'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '266'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '267'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '268'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '269'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '270'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '271'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '272'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '273'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '274'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '275'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '276'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '277'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '278'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '279'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '280'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '281'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '282'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '283'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '284'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '285'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '286'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '287'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '288'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '289'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '290'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '291'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '292'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '293'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '294'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '295'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '296'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '297'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '298'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '299'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '300'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '301'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '302'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '303'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '304'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '305'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '306'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '307'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '308'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '309'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '310'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '311'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '312'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '313'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '314'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '315'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '316'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '317'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '318'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '319'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '320'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '321'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '322'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '323'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '324'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '325'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '326'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '327'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '328'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '329'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '330'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '331'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '332'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '333'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '334'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '335'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '336'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '337'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '338'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '339'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '340'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '341'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '342'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '343'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '344'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '345'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '346'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '347'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '348'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '349'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '350'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '351'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '352'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '353'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '354'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '355'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '356'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '357'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '358'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '359'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '360'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '361'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '362'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '363'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '364'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '365'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '366'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '367'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '368'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '369'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '370'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '371'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '372'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '373'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '374'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '375'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '376'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '377'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '378'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '379'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '380'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '381'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '382'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '383'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '384'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '385'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '386'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '387'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '388'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '389'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '390'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '391'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '392'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '393'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '394'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '395'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '396'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '397'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '398'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '399'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '400'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '401'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '402'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '403'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '404'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '405'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '406'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '407'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '408'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '409'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '410'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '411'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '412'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '413'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '414'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '415'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '416'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '417'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '418'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '419'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '420'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '421'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '422'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '423'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '424'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '425'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '426'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '427'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '428'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '429'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '430'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '431'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '432'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '433'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '434'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '435'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '436'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '437'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '438'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '439'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '440'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '441'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '442'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '443'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '444'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '445'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '446'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '447'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '448'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '449'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '450'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '451'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '452'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '453'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '454'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '455'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '456'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '457'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '458'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '459'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '460'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '461'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '462'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '463'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '464'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '465'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '466'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '467'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '468'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '469'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '470'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '471'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '472'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '473'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '474'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '475'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '476'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '477'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '478'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '479'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '480'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '481'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '482'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '483'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '484'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '485'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '486'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '487'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '488'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '489'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '490'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '491'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '492'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '493'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '494'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '495'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '496'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '497'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '498'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '499'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '500'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '501'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '502'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '503'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '504'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '505'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '506'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '507'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '508'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '509'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '510'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '511'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '512'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '513'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '514'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '515'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '516'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '517'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '518'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '519'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '520'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '521'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '522'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '523'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '524'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '525'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '526'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '527'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '528'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '529'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '530'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '531'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '532'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '533'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '534'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '535'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '536'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '537'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '538'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '539'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '540'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '541'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '542'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '543'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '544'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '545'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '546'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '547'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '548'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '549'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '550'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '551'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '552'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '553'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '554'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '555'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '556'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '557'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '558'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '559'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '560'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '561'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '562'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '563'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '564'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '565'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '566'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '567'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '568'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '569'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '570'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '571'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '572'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '573'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '574'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '575'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '576'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '577'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '578'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '579'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '580'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '581'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '582'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '583'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '584'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '585'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '586'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '587'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '588'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '589'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '590'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '591'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '592'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '593'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '594'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '595'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '596'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '597'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '598'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '599'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '600'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '601'
            ]);
            DB::table('buildings')->insert([
            'buildingtype' => '55',
            'location' => '602'
            ]); 

    }
}
