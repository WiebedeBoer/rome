<?php

use Illuminate\Database\Seeder;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('cultures')->insert([
            'culture_name' => 'Latin'
        ]);
        //2
        DB::table('cultures')->insert([
            'culture_name' => 'Celtic'
        ]);
        //3
        DB::table('cultures')->insert([
            'culture_name' => 'Germanic'
        ]);
        //4
        DB::table('cultures')->insert([
            'culture_name' => 'Illyrian'
        ]);
        //5
        DB::table('cultures')->insert([
            'culture_name' => 'Thracian'
        ]);
        //6
        DB::table('cultures')->insert([
            'culture_name' => 'Punic'
        ]);
        //7
        DB::table('cultures')->insert([
            'culture_name' => 'Numidian'
        ]);
        //8
        DB::table('cultures')->insert([
            'culture_name' => 'Hellenic'
        ]);
        //9
        DB::table('cultures')->insert([
            'culture_name' => 'Persian'
        ]);
        //10
        DB::table('cultures')->insert([
            'culture_name' => 'Arab'
        ]);
        //11
        DB::table('cultures')->insert([
            'culture_name' => 'Scythian'
        ]);
        //12
        DB::table('cultures')->insert([
            'culture_name' => 'Sarmatian'
        ]);
    }
}
