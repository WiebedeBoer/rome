<?php

use Illuminate\Database\Seeder;

class RoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('roads')->insert([
            'road_name' => 'Via Appia'
        ]);
        //2
        DB::table('roads')->insert([
            'road_name' => 'Via Flaminia'
        ]);
        //3
        DB::table('roads')->insert([
            'road_name' => 'Via Cassia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Popilia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Traiana'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Salaria'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Aurelia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Postumia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Flavia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Augusta'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Domitia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Baetica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Lusitanorum'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Asturica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Aquitania'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Gallica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Agrippa'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Helvetica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Germanica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Britannica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Aemilia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Sucinaria'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Gemina'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Graeca'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Carpata'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Egnatia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Galatica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Asiana'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Syrica'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Traiana Nova'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Claudia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Numidia'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Valeria'
        ]);
        //
        DB::table('roads')->insert([
            'road_name' => 'Via Sarda'
        ]);
    }
}

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Via Appia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '1',
            'town' => '1'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '1',
            'town' => '4'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '1',
            'town' => '6'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '1',
            'town' => '21'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '5',
            'road' => '1',
            'town' => '15'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '6',
            'road' => '1',
            'town' => '16'
        ]);
        //Via Flaminia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '2',
            'town' => '2'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '2',
            'town' => '1'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '2',
            'town' => '24'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '2',
            'town' => '45'
        ]);
        //Via Cassia
        DB::table('milestones')->insert([
            'milestone' => '1',
            'road' => '3',
            'town' => '1'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '2',
            'road' => '3',
            'town' => '30'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '3',
            'road' => '3',
            'town' => '33'
        ]);
        DB::table('milestones')->insert([
            'milestone' => '4',
            'road' => '3',
            'town' => '34'
        ]);
    }
}
