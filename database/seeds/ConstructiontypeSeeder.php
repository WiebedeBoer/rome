<?php

use Illuminate\Database\Seeder;

class ConstructiontypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //state
        //state, urban
        DB::table('constructiontypes')->insert([
            'construction_name' => 'tabularium',
            'class_structure' => 'state',
            'place' => 'urban',
            'building' => '50'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'rostrum',
            'class_structure' => 'state',
            'place' => 'urban',
            'building' => '51'        
        ]);
        //state, treasury
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aerarium',
            'class_structure' => 'state',
            'place' => 'treasury',
            'building' => '11'        
        ]);

        //priest
        //temple, shrine
        DB::table('constructiontypes')->insert([
            'construction_name' => 'sacellum',
            'class_structure' => 'temple',
            'place' => 'shrine',
            'building' => '3'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aedes',
            'class_structure' => 'temple',
            'place' => 'shrine',
            'building' => '4'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'sacrarium',
            'class_structure' => 'temple',
            'place' => 'shrine',
            'building' => '5'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'delubrum',
            'class_structure' => 'temple',
            'place' => 'shrine',
            'building' => '6'        
        ]);

        //municipal
        //municipal, altar
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aedicula',
            'class_structure' => 'municipal',
            'place' => 'altar',
            'building' => '2'        
        ]);
        //municipal, urban
        DB::table('constructiontypes')->insert([
            'construction_name' => 'thermae',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '12'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'valetudinarium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '13'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'bibliotheca',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '14'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'academy',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '15'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'odeum',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '16'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'theatrum',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '17'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'amphitheatrum',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '19'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'ludus',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '19'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'stadium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '20'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'horreum',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '33'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'carnarium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '34'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'basilica',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '39'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'forum venalium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '46'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'forum servus',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '47'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'mercatus',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '48'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'forum civilium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '49'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'gymnasium',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '86'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aquaduct',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '87'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fonticulus',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '88'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fons',
            'class_structure' => 'municipal',
            'place' => 'urban',
            'building' => '89'        
        ]);
        //municipal, port
        DB::table('constructiontypes')->insert([
            'construction_name' => 'portus',
            'class_structure' => 'municipal',
            'place' => 'port',
            'building' => '21'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'navalia',
            'class_structure' => 'municipal',
            'place' => 'port',
            'building' => '22'        
        ]);
        //municipal, wall
        DB::table('constructiontypes')->insert([
            'construction_name' => 'porta',
            'class_structure' => 'municipal',
            'place' => 'wall',
            'building' => '23'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'turris',
            'class_structure' => 'municipal',
            'place' => 'wall',
            'building' => '24'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'praesidium',
            'class_structure' => 'municipal',
            'place' => 'wall',
            'building' => '25'        
        ]);
        //municipal, workshop
        DB::table('constructiontypes')->insert([
            'construction_name' => 'taberna',
            'class_structure' => 'municipal',
            'place' => 'workshop',
            'building' => '35'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'mansio',
            'class_structure' => 'municipal',
            'place' => 'workshop',
            'building' => '36'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fabrica',
            'class_structure' => 'municipal',
            'place' => 'workshop',
            'building' => '37'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'armamentarium',
            'class_structure' => 'municipal',
            'place' => 'workshop',
            'building' => '38'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'advector',
            'class_structure' => 'municipal',
            'place' => 'workshop',
            'building' => '40'        
        ]);

        //military
        //fort, altar 
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aedicula',
            'class_structure' => 'fort',
            'place' => 'altar',
            'building' => '2'        
        ]);
        //fort, fort (fort)
        DB::table('constructiontypes')->insert([
            'construction_name' => 'porta',
            'class_structure' => 'municipal',
            'place' => 'fort',
            'building' => '23'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'turris',
            'class_structure' => 'municipal',
            'place' => 'fort',
            'building' => '24'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'praesidium',
            'class_structure' => 'municipal',
            'place' => 'fort',
            'building' => '25'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'castellum',
            'class_structure' => 'fort',
            'place' => 'fort',
            'building' => '26'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'castrum',
            'class_structure' => 'fort',
            'place' => 'fort',
            'building' => '27'        
        ]);
        //fort, urban
        DB::table('constructiontypes')->insert([
            'construction_name' => 'praetorium',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '28'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'sagittariorum',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '29'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'stabula',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '30'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'quintana',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '31'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'contubernium',
            'class_structure' => 'fort',
            'place' => 'strigae',
            'building' => '32'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'horreum',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '33'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'carnarium',
            'class_structure' => 'fort',
            'place' => 'camp',
            'building' => '34'        
        ]);
        //fort, factory
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fabrica',
            'class_structure' => 'fort',
            'place' => 'factory',
            'building' => '37'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'armamentarium',
            'class_structure' => 'fort',
            'place' => 'factory',
            'building' => '38'        
        ]);

        //private
        //urban, urban (urban cemetery)
        DB::table('constructiontypes')->insert([
            'construction_name' => 'sepulcrum',
            'class_structure' => 'urban',
            'place' => 'cemetery',
            'building' => '7'        
        ]);
        //urban, altar
        DB::table('constructiontypes')->insert([
            'construction_name' => 'aedicula',
            'class_structure' => 'urban',
            'place' => 'altar',
            'building' => '2'        
        ]);
        //urban, workshop (urban workshop)
        DB::table('constructiontypes')->insert([
            'construction_name' => 'horreum',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '33'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'carnarium',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '34'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'taberna',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '35'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'mansio',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '36'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fabrica',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '37'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'armamentarium',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '38'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'advector',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '40'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'dyeworks',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '62'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'tannery',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '64'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'furrier',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '65'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'amphora kiln',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '90'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cooper',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '91'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cabinetmaker',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '92'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'basket weaver',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '93'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'perfumer',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '94'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'herbalist',
            'class_structure' => 'urban',
            'place' => 'workshop',
            'building' => '95'        
        ]);
        //urban, port
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fishing wharf',
            'class_structure' => 'urban',
            'place' => 'port',
            'building' => '63'        
        ]);
        //urban, apartment
        DB::table('constructiontypes')->insert([
            'construction_name' => 'taberna',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '35'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'mansio',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '36'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fabrica',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '37'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'insulae',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '43'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cabinetmaker',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '92'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'basket weaver',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '93'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'perfumer',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '94'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'herbalist',
            'class_structure' => 'urban',
            'place' => 'apartment',
            'building' => '95'        
        ]);
        //urban, household (urban villa)
        DB::table('constructiontypes')->insert([
            'construction_name' => 'lararium',
            'class_structure' => 'urban',
            'place' => 'household',
            'building' => '1'        
        ]);
        //urban, residence
        DB::table('constructiontypes')->insert([
            'construction_name' => 'tugurium',
            'class_structure' => 'urban',
            'place' => 'residence',
            'building' => '41'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'casa',
            'class_structure' => 'urban',
            'place' => 'residence',
            'building' => '42'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'villa',
            'class_structure' => 'urban',
            'place' => 'residence',
            'building' => '44'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'palatium',
            'class_structure' => 'urban',
            'place' => 'residence',
            'building' => '45'        
        ]);
        //rustic, rustic (rustic villa)
        DB::table('constructiontypes')->insert([
            'construction_name' => 'lararium',
            'class_structure' => 'rustic',
            'place' => 'household',
            'building' => '1'        
        ]);
        //rustic, estate
        DB::table('constructiontypes')->insert([
            'construction_name' => 'tugurium',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '41'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'casa',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '42'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'villa',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '44'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'palatium',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '45'        
        ]);
        //rustic, farm
        DB::table('constructiontypes')->insert([
            'construction_name' => 'taberna',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '35'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'mansio',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '36'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'stabula',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '30'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'horreum',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '33'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'carnarium',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '34'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'fabrica',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '37'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'dyeworks',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '62'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'tannery',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '64'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'furrier',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '65'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'apiary',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '73'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'chicken coop',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '74'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'duck pond',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '75'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'dog kennel',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '80'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'rabbit pen',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '85'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'amphora kiln',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '90'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cooper',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '91'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cabinetmaker',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '92'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'basket weaver',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '93'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'perfumer',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '94'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'herbalist',
            'class_structure' => 'rustic',
            'place' => 'farm',
            'building' => '95'        
        ]);

        //rustic, rustic
        DB::table('constructiontypes')->insert([
            'construction_name' => 'grain field',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '66'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'flax field',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '67'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cotton field',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '68'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'dates plantation',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '69'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'orchard',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '70'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'olive grove',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '71'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'vineyard',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '72'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'cattle meadow',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '76'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'donkey farm',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '77'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'camel caravan',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '78'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'horse paddock',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '79'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'oxen farm',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '81'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'sheep meadow',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '82'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'goat meadow',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '83'        
        ]);
        DB::table('constructiontypes')->insert([
            'construction_name' => 'pigsty',
            'class_structure' => 'rustic',
            'place' => 'rustic',
            'building' => '84'        
        ]);

        
    }
}
