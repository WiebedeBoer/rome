<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('regions')->insert([
			'region_name' => 'Italia'
        ]);
        //2
        DB::table('regions')->insert([
			'region_name' => 'Sicilia'
        ]);
        //3
        DB::table('regions')->insert([
			'region_name' => 'Sardinia'
        ]);
        //4
        DB::table('regions')->insert([
			'region_name' => 'Corsica'
        ]);
        //5
        DB::table('regions')->insert([
			'region_name' => 'Annonaria'
        ]);
        //6
        DB::table('regions')->insert([
			'region_name' => 'Gallia'
        ]);
        //7
        DB::table('regions')->insert([
			'region_name' => 'Germania'
        ]);
        //8
        DB::table('regions')->insert([
			'region_name' => 'Britannia'
        ]);
        //9
        DB::table('regions')->insert([
			'region_name' => 'Hibernia'
        ]);
        //10
        DB::table('regions')->insert([
			'region_name' => 'Hispania'
        ]);
        //11
        DB::table('regions')->insert([
            'region_name' => 'Mallorca'
        ]);
        //12
        DB::table('regions')->insert([
            'region_name' => 'Ibiza'
        ]);
        //13
        DB::table('regions')->insert([
			'region_name' => 'Mauretania'
        ]);
        //14
        DB::table('regions')->insert([
			'region_name' => 'Numidia'
        ]);
        //15
        DB::table('regions')->insert([
			'region_name' => 'Africa'
        ]);
        //16
        DB::table('regions')->insert([
			'region_name' => 'Aegyptus'
        ]);
        //17
        DB::table('regions')->insert([
			'region_name' => 'Cyprus'
        ]);
        //18
        DB::table('regions')->insert([
			'region_name' => 'Creta'
        ]);
        //19
        DB::table('regions')->insert([
			'region_name' => 'Cyclades'
        ]);
        //20
        DB::table('regions')->insert([
            'region_name' => 'Rhodus'
        ]);
        //21
        DB::table('regions')->insert([
			'region_name' => 'Achaea'
        ]);
        //22
        DB::table('regions')->insert([
            'region_name' => 'Hellas'
        ]);
        //23
        DB::table('regions')->insert([
			'region_name' => 'Macedonia'
        ]);
        //24
        DB::table('regions')->insert([
			'region_name' => 'Thracia'
        ]);
        //25
        DB::table('regions')->insert([
			'region_name' => 'Illyricum'
        ]);
        //26
        DB::table('regions')->insert([
			'region_name' => 'Dacia'
        ]);
        //27
        DB::table('regions')->insert([
            'region_name' => 'Bosporus'
        ]);
        //28
        DB::table('regions')->insert([
            'region_name' => 'Sarmatia'
        ]);
        //29
        DB::table('regions')->insert([
            'region_name' => 'Scythia'
        ]);
        //30
        DB::table('regions')->insert([
			'region_name' => 'Asia'
        ]);
        //31
        DB::table('regions')->insert([
			'region_name' => 'Armenia'
        ]);
        //32
        DB::table('regions')->insert([
			'region_name' => 'Persia'
        ]);
        //33
        DB::table('regions')->insert([
			'region_name' => 'Mesopotamia'
        ]);
        //34
        DB::table('regions')->insert([
			'region_name' => 'Syria'
        ]);
        //35
        DB::table('regions')->insert([
			'region_name' => 'Arabia'
        ]);

    }
}
