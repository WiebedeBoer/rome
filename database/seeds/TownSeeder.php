<?php

use Illuminate\Database\Seeder;

class ArchitectureSeeder extends Seeder
{	
	//towns
    public function run()
    {        
        //1
        DB::table('architectures')->insert([
            'architecture_name' => 'Italo Roman',
            'domus' => 'roman',
            'insula' => 'roman',
            'villa' => 'roman',
            'taberna' => 'roman',
            'forum' => 'roman',
            'emporium' => 'roman',
            'templum' => 'roman',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //2
        DB::table('architectures')->insert([
            'architecture_name' => 'Gallo Roman',
            'domus' => 'gallic',
            'insula' => 'gallic',
            'villa' => 'roman',
            'taberna' => 'gallic',
            'forum' => 'roman',
            'emporium' => 'gallic',
            'templum' => 'roman',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //3
        DB::table('architectures')->insert([
            'architecture_name' => 'Germanic Roman',
            'domus' => 'gallic',
            'insula' => 'gallic',
            'villa' => 'roman',
            'taberna' => 'gallic',
            'forum' => 'roman',
            'emporium' => 'gallic',
            'templum' => 'roman',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //4
        DB::table('architectures')->insert([
            'architecture_name' => 'Ibero Roman',
            'domus' => 'gallic',
            'insula' => 'gallic',
            'villa' => 'roman',
            'taberna' => 'gallic',
            'forum' => 'roman',
            'emporium' => 'roman',
            'templum' => 'roman',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //5
        DB::table('architectures')->insert([
            'architecture_name' => 'Greco Roman',
            'domus' => 'greco',
            'insula' => 'greco',
            'villa' => 'greco',
            'taberna' => 'greco',
            'forum' => 'greco',
            'emporium' => 'greco',
            'templum' => 'greco',
            'thermae' => 'greco',
            'bibliotheca' => 'greco',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //6
        DB::table('architectures')->insert([
            'architecture_name' => 'Punic Roman',
            'domus' => 'punic',
            'insula' => 'punic',
            'villa' => 'roman',
            'taberna' => 'roman',
            'forum' => 'punic',
            'emporium' => 'punic',
            'templum' => 'punic',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //7
        DB::table('architectures')->insert([
            'architecture_name' => 'Thraco Roman',
            'domus' => 'gallic',
            'insula' => 'gallic',
            'villa' => 'roman',
            'taberna' => 'gallic',
            'forum' => 'roman',
            'emporium' => 'gallic',
            'templum' => 'roman',
            'thermae' => 'roman',
            'bibliotheca' => 'roman',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //8
        DB::table('architectures')->insert([
            'architecture_name' => 'Greco Arabic',
            'domus' => 'punic',
            'insula' => 'punic',
            'villa' => 'punic',
            'taberna' => 'punic',
            'forum' => 'punic',
            'emporium' => 'punic',
            'templum' => 'greco',
            'thermae' => 'greco',
            'bibliotheca' => 'greco',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //9
        DB::table('architectures')->insert([
            'architecture_name' => 'Greco Persian',
            'domus' => 'persian',
            'insula' => 'persian',
            'villa' => 'persian',
            'taberna' => 'greco',
            'forum' => 'persian',
            'emporium' => 'persian',
            'templum' => 'persian',
            'thermae' => 'greco',
            'bibliotheca' => 'greco',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
        //10
        DB::table('architectures')->insert([
            'architecture_name' => 'Greco Scythian',
            'domus' => 'gallic',
            'insula' => 'gallic',
            'villa' => 'greco',
            'taberna' => 'greco',
            'forum' => 'greco',
            'emporium' => 'greco',
            'templum' => 'greco',
            'thermae' => 'greco',
            'bibliotheca' => 'greco',
            'theatrum' => 'roman',
            'amphitheatrum' => 'roman',
            'stadium' => 'roman'
        ]);
    }
}
