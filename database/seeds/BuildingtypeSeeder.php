<?php

use Illuminate\Database\Seeder;

class BuildingtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //religious, templum ground (multiple) no. 1
        //1 shrine for household gods
        DB::table('buildingtypes')->insert([
            'building_name' => 'lararium',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //2 shrine at storeroom
        DB::table('buildingtypes')->insert([
            'building_name' => 'aedicula',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //3 shrine small
        DB::table('buildingtypes')->insert([
            'building_name' => 'sacellum',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //4 shrine medium
        DB::table('buildingtypes')->insert([
            'building_name' => 'aedes',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //5 shrine with sacred objects
        DB::table('buildingtypes')->insert([
            'building_name' => 'sacrarium',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //6 shrine with idol
        DB::table('buildingtypes')->insert([
            'building_name' => 'delubrum',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //7 grave
        DB::table('buildingtypes')->insert([
            'building_name' => 'sepulcrum',
            'building_category' => 'religious',
            'religious_category' => 'grave'
        ]);
        //8 tomb
        DB::table('buildingtypes')->insert([
            'building_name' => 'mausoleum',
            'building_category' => 'religious',
            'religious_category' => 'shrine'
        ]);
        //9 sacred grove
        DB::table('buildingtypes')->insert([
            'building_name' => 'lucus',
            'building_category' => 'religious',
            'religious_category' => 'grove'
        ]);
        //10 oracle
        DB::table('buildingtypes')->insert([
            'building_name' => 'oraculum',
            'building_category' => 'religious',
            'religious_category' => 'oracle'
        ]);
        //11 (treasury, realm capital)
        DB::table('buildingtypes')->insert([
            'building_name' => 'aerarium',
            'building_category' => 'religious',
            'religious_category' => 'treasury'
        ]);
        //health ground (addition) no. 2
        //12
        DB::table('buildingtypes')->insert([
            'building_name' => 'thermae',
            'building_category' => 'health'
        ]);
        //13
        DB::table('buildingtypes')->insert([
            'building_name' => 'valetudinarium',
            'building_category' => 'health'
        ]);
        //education ground (addition) no. 3
        //14
        DB::table('buildingtypes')->insert([
            'building_name' => 'bibliotheca',
            'building_category' => 'education'
        ]);
        //15
        DB::table('buildingtypes')->insert([
            'building_name' => 'academy',
            'building_category' => 'education'
        ]);
        //theatre ground (addition) no. 4
        //16
        DB::table('buildingtypes')->insert([
            'building_name' => 'odeum',
            'building_category' => 'theatre'
        ]);
        //17
        DB::table('buildingtypes')->insert([
            'building_name' => 'theatrum',
            'building_category' => 'theatre'
        ]);
        //amphitheatre ground (addition) no. 5
        //18
        DB::table('buildingtypes')->insert([
            'building_name' => 'amphitheatrum',
            'building_category' => 'amphitheatre'
        ]);
        //19
        DB::table('buildingtypes')->insert([
            'building_name' => 'ludus',
            'building_category' => 'amphitheatre'
        ]);
        //racetrack ground (single) no. 6
        //20
        DB::table('buildingtypes')->insert([
            'building_name' => 'stadium',
            'building_category' => 'racetrack'
        ]);     
        //port ground (addition) no. 7
        //21
        DB::table('buildingtypes')->insert([
            'building_name' => 'portus',
            'building_category' => 'port'
        ]);
        //22
        DB::table('buildingtypes')->insert([
            'building_name' => 'navalia',
            'building_category' => 'port'
        ]);      
        //wall ground (addition) no. 8
        //23
        DB::table('buildingtypes')->insert([
            'building_name' => 'porta',
            'building_category' => 'wall'
        ]);  
        //24
        DB::table('buildingtypes')->insert([
            'building_name' => 'turris',
            'building_category' => 'wall'
        ]); 
        //25
        DB::table('buildingtypes')->insert([
            'building_name' => 'praesidium',
            'building_category' => 'military'
        ]);
        //military ground (addition, multiple contubernia) no. 9
        //26
        DB::table('buildingtypes')->insert([
            'building_name' => 'castellum',
            'building_category' => 'military'
        ]);
        //27
        DB::table('buildingtypes')->insert([
            'building_name' => 'castrum',
            'building_category' => 'military'
        ]);
        //28
        DB::table('buildingtypes')->insert([
            'building_name' => 'praetorium',
            'building_category' => 'military'
        ]);
        //29
        DB::table('buildingtypes')->insert([
            'building_name' => 'sagittariorum',
            'building_category' => 'military'
        ]);
        //30
        DB::table('buildingtypes')->insert([
            'building_name' => 'stabula',
            'building_category' => 'military'
        ]);
        //31
        DB::table('buildingtypes')->insert([
            'building_name' => 'quintana',
            'building_category' => 'military'
        ]);
        //32 (tents, multiple)
        DB::table('buildingtypes')->insert([
            'building_name' => 'contubernium',
            'building_category' => 'military'
        ]);
        //storage ground (addition) no. 10
        //33
        DB::table('buildingtypes')->insert([
            'building_name' => 'horreum',
            'building_category' => 'storage'
        ]);
        //34
        DB::table('buildingtypes')->insert([
            'building_name' => 'carnarium',
            'building_category' => 'storage'
        ]);
        //commerce ground (addition) no. 11
        //35
        DB::table('buildingtypes')->insert([
            'building_name' => 'taberna',
            'building_category' => 'commerce'
        ]);
        //36
        DB::table('buildingtypes')->insert([
            'building_name' => 'mansio',
            'building_category' => 'commerce'
        ]);
        //37
        DB::table('buildingtypes')->insert([
            'building_name' => 'fabrica',
            'building_category' => 'commerce'
        ]);
        //38
        DB::table('buildingtypes')->insert([
            'building_name' => 'armamentarium',
            'building_category' => 'commerce'
        ]);
        //39
        DB::table('buildingtypes')->insert([
            'building_name' => 'basilica',
            'building_category' => 'commerce'
        ]);
        //40 (silk, incense, spices, ivory)
        DB::table('buildingtypes')->insert([
            'building_name' => 'advector',
            'building_category' => 'commerce'
        ]);
        //residential ground (multiple) no. 12
        //41
        DB::table('buildingtypes')->insert([
            'building_name' => 'tugurium',
            'building_category' => 'residential'
        ]);
        //42
        DB::table('buildingtypes')->insert([
            'building_name' => 'casa',
            'building_category' => 'residential'
        ]);
        //43
        DB::table('buildingtypes')->insert([
            'building_name' => 'insulae',
            'building_category' => 'residential'
        ]);
        //44
        DB::table('buildingtypes')->insert([
            'building_name' => 'villa',
            'building_category' => 'residential'
        ]);
        //45
        DB::table('buildingtypes')->insert([
            'building_name' => 'palatium',
            'building_category' => 'residential'
        ]);
        //trade ground (addition) no.13
        //46 (food market)
        DB::table('buildingtypes')->insert([
            'building_name' => 'forum venalium',
            'building_category' => 'trade'
        ]);
        //47 (slave market, slaves)
        DB::table('buildingtypes')->insert([
            'building_name' => 'forum servus',
            'building_category' => 'trade'
        ]);
        //48 (market)
        DB::table('buildingtypes')->insert([
            'building_name' => 'mercatus',
            'building_category' => 'trade'
        ]);
        //municipal ground (fixed) no.13
        //49 
        DB::table('buildingtypes')->insert([
            'building_name' => 'forum civilium',
            'building_category' => 'municipal'
        ]);
        //50 (records office, realm capital)
        DB::table('buildingtypes')->insert([
            'building_name' => 'tabularium',
            'building_category' => 'municipal'
        ]);
        //51 (speaker platform, realm capital)
        DB::table('buildingtypes')->insert([
            'building_name' => 'rostrum',
            'building_category' => 'municipal'
        ]);
        //industrial ground (fixed) no. 14
        //52
        DB::table('buildingtypes')->insert([
            'building_name' => 'mine',
            'building_category' => 'industrial'
        ]);
        //53
        DB::table('buildingtypes')->insert([
            'building_name' => 'claypit',
            'building_category' => 'industrial'
        ]);
        //54
        DB::table('buildingtypes')->insert([
            'building_name' => 'quarry',
            'building_category' => 'industrial'
        ]);
        //55
        DB::table('buildingtypes')->insert([
            'building_name' => 'sawmill',
            'building_category' => 'industrial'
        ]);

        //health ground (addition) no. 2 (extra)
        //56
        DB::table('buildingtypes')->insert([
            'building_name' => 'gymnasium',
            'building_category' => 'health'
        ]);
        //57
        DB::table('buildingtypes')->insert([
            'building_name' => 'aquaduct',
            'building_category' => 'health'
        ]);
        //58
        DB::table('buildingtypes')->insert([
            'building_name' => 'fonticulus',
            'building_category' => 'health'
        ]);
        //59
        DB::table('buildingtypes')->insert([
            'building_name' => 'fons',
            'building_category' => 'health'
        ]);
        /*
        //wonders
        //60
        DB::table('buildingtypes')->insert([
            'building_name' => 'hanging gardens',
            'building_category' => 'wonder'
        ]);
        //61
        DB::table('buildingtypes')->insert([
            'building_name' => 'pyramid',
            'building_category' => 'wonder'
        ]);
        //62
        DB::table('buildingtypes')->insert([
            'building_name' => 'lighthouse',
            'building_category' => 'wonder'
        ]);
        */

    }
}
