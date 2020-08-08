<?php

use Illuminate\Database\Seeder;

class RealmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //latin
        //
        DB::table('realms')->insert([
            'realm_name' => 'Rome',
            'culture' => '1'
        ]);
        //celtic

        //germanic

        //illyrian

        //thracian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Dacia',
            'culture' => '5'
        ]);
        //punic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Carthage',
            'culture' => '6'
        ]);
        //numidian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Numidia',
            'culture' => '7'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Mauretania',
            'culture' => '7'
        ]);
        //hellenic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Macedon',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Aegyptus',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Seleucid',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Pergamon',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Aetolia',
            'culture' => '8'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Achaea',
            'culture' => '8'
        ]);
        //persian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Pontus',
            'culture' => '9'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Armenia',
            'culture' => '9'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Parthia',
            'culture' => '9'
        ]);
        //arabic
        //
        DB::table('realms')->insert([
            'realm_name' => 'Nabataea',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Himyarite',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Minaea',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Kindah',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Gerrha',
            'culture' => '10'
        ]);
        //
        DB::table('realms')->insert([
            'realm_name' => 'Saba',
            'culture' => '10'
        ]);
        //scythian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Scythia',
            'culture' => '11'
        ]);
        //sarmatian
        //
        DB::table('realms')->insert([
            'realm_name' => 'Sarmatia',
            'culture' => '12'
        ]);

    }
}
