<?php

use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('religions')->insert([
            'religion_name' => 'Arabic Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //2
        DB::table('religions')->insert([
            'religion_name' => 'Celtic Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //3
        DB::table('religions')->insert([
            'religion_name' => 'Greek Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //4
        DB::table('religions')->insert([
            'religion_name' => 'Iberian Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //5
        DB::table('religions')->insert([
            'religion_name' => 'Libyan Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //6
        DB::table('religions')->insert([
            'religion_name' => 'Norse Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //7
        DB::table('religions')->insert([
            'religion_name' => 'Roman Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //8
        DB::table('religions')->insert([
            'religion_name' => 'Scythian Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //9
        DB::table('religions')->insert([
            'religion_name' => 'Thraco-Illyrian Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //10
        DB::table('religions')->insert([
            'religion_name' => 'Zoroastrianism',
            'religion_category' => 'henotheism'
        ]);
        //11
        DB::table('religions')->insert([
            'religion_name' => 'Georgian Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //12
        DB::table('religions')->insert([
            'religion_name' => 'Canaanite Polytheism',
            'religion_category' => 'polytheism'
        ]);
        //13
        DB::table('religions')->insert([
            'religion_name' => 'Hellenic Judaism',
            'religion_category' => 'monotheism'
        ]);
        //14
        DB::table('religions')->insert([
            'religion_name' => 'Armenian Polytheism',
            'religion_category' => 'polytheism'
        ]);

    }
}
