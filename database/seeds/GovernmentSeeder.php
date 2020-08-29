<?php

use Illuminate\Database\Seeder;

class GovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 (1)
        DB::table('governments')->insert([
            'government_name' => 'Republic',
            'head_of_state' => 'Consul',
            'assembly' => 'Senate',
            'rulers' => '2',
            'power' => 'oligarchy',
            'territory' => 'unitary',
            'form' => 'republic'
        ]);
        //2 (33)
        DB::table('governments')->insert([
            'government_name' => 'Monarchy',
            'head_of_state' => 'King',
            'assembly' => 'Aula',
            'rulers' => '1',
            'power' => 'autocracy',
            'territory' => 'unitary',
            'form' => 'monarchy'
        ]);
        //3 (0)
        DB::table('governments')->insert([
            'government_name' => 'Diarchy',
            'head_of_state' => 'King',
            'assembly' => 'Aula',
            'rulers' => '2',
            'power' => 'oligarchy',
            'territory' => 'unitary',
            'form' => 'monarchy'
        ]);
        //4 (6)
        DB::table('governments')->insert([
            'government_name' => 'Tribal Confederation',
            'head_of_state' => 'King',
            'assembly' => 'Fanum',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'federative',
            'form' => 'monarchy'
        ]);
        //5 (90)
        DB::table('governments')->insert([
            'government_name' => 'Tribe',
            'head_of_state' => 'King',
            'assembly' => 'Comitium',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'unitary',
            'form' => 'monarchy'
        ]);
        //6 (2)
        DB::table('governments')->insert([
            'government_name' => 'League',
            'head_of_state' => 'Hegemon',
            'assembly' => 'Synodos',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'federative',
            'form' => 'republic'
        ]);
        //7 (1)
        DB::table('governments')->insert([
            'government_name' => 'Oligarchic Republic',
            'head_of_state' => 'Suffet',
            'assembly' => 'Senate',
            'rulers' => '2',
            'power' => 'oligarchy',
            'territory' => 'unitary',
            'form' => 'republic'
        ]);
        //8 (10)
        DB::table('governments')->insert([
            'government_name' => 'City State',
            'head_of_state' => 'Archon',
            'assembly' => 'Bouleuterion',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'city state',
            'form' => 'republic'
        ]);
        //9 (1)
        DB::table('governments')->insert([
            'government_name' => 'Tyranny',
            'head_of_state' => 'Tyrant',
            'assembly' => 'Bouleuterion',
            'rulers' => '1',
            'power' => 'autocracy',
            'territory' => 'city state',
            'form' => 'republic'
        ]);
        //10 (1)
        DB::table('governments')->insert([
            'government_name' => 'Pirate Confederation',
            'head_of_state' => 'King',
            'assembly' => 'Synodos',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'federative',
            'form' => 'monarchy'
        ]);
        //11 (1)
        DB::table('governments')->insert([
            'government_name' => 'Theocratic Confederation',
            'head_of_state' => 'King',
            'assembly' => 'Fanum',
            'rulers' => '1',
            'power' => 'oligarchy',
            'territory' => 'federative',
            'form' => 'monarchy'
        ]);
    }
}
