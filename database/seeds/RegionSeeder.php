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
            'region_name' => 'Italia',
            'architecture' => '1'
        ]);
        //2
        DB::table('regions')->insert([
            'region_name' => 'Sicilia',
            'architecture' => '1'
        ]);
        //3
        DB::table('regions')->insert([
            'region_name' => 'Sardinia',
            'architecture' => '1'
        ]);
        //4
        DB::table('regions')->insert([
            'region_name' => 'Corsica',
            'architecture' => '1'
        ]);
        //5
        DB::table('regions')->insert([
            'region_name' => 'Annonaria',
            'architecture' => '2'
        ]);
        //6
        DB::table('regions')->insert([
            'region_name' => 'Gallia',
            'architecture' => '2'
        ]);
        //7
        DB::table('regions')->insert([
            'region_name' => 'Germania',
            'architecture' => '3'
        ]);
        //8
        DB::table('regions')->insert([
            'region_name' => 'Britannia',
            'architecture' => '2'
        ]);
        //9
        DB::table('regions')->insert([
            'region_name' => 'Hibernia',
            'architecture' => '2'
        ]);
        //10
        DB::table('regions')->insert([
            'region_name' => 'Hispania',
            'architecture' => '4'
        ]);
        //11
        DB::table('regions')->insert([
            'region_name' => 'Mallorca',
            'architecture' => '4'
        ]);
        //12
        DB::table('regions')->insert([
            'region_name' => 'Ibiza',
            'architecture' => '4'
        ]);
        //13
        DB::table('regions')->insert([
            'region_name' => 'Mauretania',
            'architecture' => '6'
        ]);
        //14
        DB::table('regions')->insert([
            'region_name' => 'Numidia',
            'architecture' => '6'
        ]);
        //15
        DB::table('regions')->insert([
            'region_name' => 'Africa',
            'architecture' => '6'
        ]);
        //16
        DB::table('regions')->insert([
            'region_name' => 'Aegyptus',
            'architecture' => '5'
        ]);
        //17
        DB::table('regions')->insert([
            'region_name' => 'Cyprus',
            'architecture' => '5'
        ]);
        //18
        DB::table('regions')->insert([
            'region_name' => 'Creta',
            'architecture' => '5'
        ]);
        //19
        DB::table('regions')->insert([
            'region_name' => 'Cyclades',
            'architecture' => '5'
        ]);
        //20
        DB::table('regions')->insert([
            'region_name' => 'Rhodus',
            'architecture' => '5'
        ]);
        //21
        DB::table('regions')->insert([
            'region_name' => 'Achaea',
            'architecture' => '5'
        ]);
        //22
        DB::table('regions')->insert([
            'region_name' => 'Hellas',
            'architecture' => '5'
        ]);
        //23
        DB::table('regions')->insert([
            'region_name' => 'Macedonia',
            'architecture' => '5'
        ]);
        //24
        DB::table('regions')->insert([
            'region_name' => 'Thracia',
            'architecture' => '5'
        ]);
        //25
        DB::table('regions')->insert([
            'region_name' => 'Illyricum',
            'architecture' => '7'
        ]);
        //26
        DB::table('regions')->insert([
            'region_name' => 'Dacia',
            'architecture' => '7'
        ]);
        //27
        DB::table('regions')->insert([
            'region_name' => 'Bosporus',
            'architecture' => '6'
        ]);
        //28
        DB::table('regions')->insert([
            'region_name' => 'Sarmatia',
            'architecture' => '10'
        ]);
        //29
        DB::table('regions')->insert([
            'region_name' => 'Scythia',
            'architecture' => '10'
        ]);
        //30
        DB::table('regions')->insert([
            'region_name' => 'Chios',
            'architecture' => '5'
        ]);
        //31
        DB::table('regions')->insert([
            'region_name' => 'Asia',
            'architecture' => '5'
        ]);
        //32
        DB::table('regions')->insert([
            'region_name' => 'Armenia',
            'architecture' => '9'
        ]);
        //33
        DB::table('regions')->insert([
            'region_name' => 'Persia',
            'architecture' => '9'
        ]);
        //34
        DB::table('regions')->insert([
            'region_name' => 'Mesopotamia',
            'architecture' => '9'
        ]);
        //35
        DB::table('regions')->insert([
            'region_name' => 'Syria',
            'architecture' => '5'
        ]);
        //36
        DB::table('regions')->insert([
            'region_name' => 'Arabia',
            'architecture' => '8'
        ]);

    }
}
