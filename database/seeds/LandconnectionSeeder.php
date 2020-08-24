<?php

use Illuminate\Database\Seeder;

class LandconnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Italia, Annonaria
		DB::table('landconnections')->insert([
            'to' => '1',
            'from' => '5'
        ]);
		DB::table('landconnections')->insert([
            'to' => '5',
            'from' => '1'
        ]);
        //Annonaria, Gallia
		DB::table('landconnections')->insert([
            'to' => '5',
            'from' => '6'
        ]);
		DB::table('landconnections')->insert([
            'to' => '6',
            'from' => '5'
        ]);
        //Annonaria, Germania
		DB::table('landconnections')->insert([
            'to' => '5',
            'from' => '7'
        ]);
		DB::table('landconnections')->insert([
            'to' => '7',
            'from' => '5'
        ]);
        //Annonaria, Illyricum
		DB::table('landconnections')->insert([
            'to' => '5',
            'from' => '25'
        ]);
		DB::table('landconnections')->insert([
            'to' => '25',
            'from' => '2'
        ]);
        //Gallia, Germania
		DB::table('landconnections')->insert([
            'to' => '6',
            'from' => '7'
        ]);
		DB::table('landconnections')->insert([
            'to' => '7',
            'from' => '6'
        ]);
        //Gallia, Hispania
		DB::table('landconnections')->insert([
            'to' => '6',
            'from' => '10'
        ]);
		DB::table('landconnections')->insert([
            'to' => '10',
            'from' => '6'
        ]);
        //Germania, Illyricum
		DB::table('landconnections')->insert([
            'to' => '7',
            'from' => '25'
        ]);
		DB::table('landconnections')->insert([
            'to' => '25',
            'from' => '7'
        ]);
        //Germania, Dacia
		DB::table('landconnections')->insert([
            'to' => '7',
            'from' => '26'
        ]);
		DB::table('landconnections')->insert([
            'to' => '26',
            'from' => '7'
        ]);
        //Germania, Sarmatia
		DB::table('landconnections')->insert([
            'to' => '7',
            'from' => '28'
        ]);
		DB::table('landconnections')->insert([
            'to' => '28',
            'from' => '7'
        ]);
        //Mauretania, Numidia
		DB::table('landconnections')->insert([
            'to' => '13',
            'from' => '14'
        ]);
		DB::table('landconnections')->insert([
            'to' => '14',
            'from' => '13'
        ]);
        //Numidia, Africa
		DB::table('landconnections')->insert([
            'to' => '14',
            'from' => '15'
        ]);
		DB::table('landconnections')->insert([
            'to' => '15',
            'from' => '14'
        ]);
        //Africa, Aegyptus
		DB::table('landconnections')->insert([
            'to' => '15',
            'from' => '16'
        ]);
		DB::table('landconnections')->insert([
            'to' => '16',
            'from' => '15'
        ]);
        //Aegyptus, Syria
		DB::table('landconnections')->insert([
            'to' => '16',
            'from' => '35'
        ]);
		DB::table('landconnections')->insert([
            'to' => '35',
            'from' => '16'
        ]);
        //Aegyptus, Arabia
		DB::table('landconnections')->insert([
            'to' => '16',
            'from' => '36'
        ]);
		DB::table('landconnections')->insert([
            'to' => '36',
            'from' => '16'
        ]);
        //Achaea, Hellas
		DB::table('landconnections')->insert([
            'to' => '21',
            'from' => '22'
        ]);
		DB::table('landconnections')->insert([
            'to' => '22',
            'from' => '21'
        ]);
        //Hellas, Macedonia
		DB::table('landconnections')->insert([
            'to' => '22',
            'from' => '23'
        ]);
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '22'
        ]);
        //Macedonia, Thracia
		DB::table('landconnections')->insert([
            'to' => '23',
            'from' => '24'
        ]);
		DB::table('landconnections')->insert([
            'to' => '24',
            'from' => '23'
        ]);
        //Macedonia, Illyricum
		DB::table('landconnections')->insert([
            'to' => '23',
            'from' => '25'
        ]);
		DB::table('landconnections')->insert([
            'to' => '25',
            'from' => '23'
        ]);
        //Thracia, Illyricum
		DB::table('landconnections')->insert([
            'to' => '24',
            'from' => '25'
        ]);
		DB::table('landconnections')->insert([
            'to' => '25',
            'from' => '24'
        ]);
        //Thracia, Dacia
		DB::table('landconnections')->insert([
            'to' => '25',
            'from' => '26'
        ]);
		DB::table('landconnections')->insert([
            'to' => '26',
            'from' => '25'
        ]);
        //Dacia, Sarmatia
		DB::table('landconnections')->insert([
            'to' => '26',
            'from' => '28'
        ]);
		DB::table('landconnections')->insert([
            'to' => '28',
            'from' => '26'
        ]);
        //Bosporus, Sarmatia
		DB::table('landconnections')->insert([
            'to' => '27',
            'from' => '28'
        ]);
		DB::table('landconnections')->insert([
            'to' => '28',
            'from' => '27'
        ]);
        //Sarmatia, Scythia
		DB::table('landconnections')->insert([
            'to' => '28',
            'from' => '29'
        ]);
		DB::table('landconnections')->insert([
            'to' => '29',
            'from' => '28'
        ]);
        //Scythia, Armenia
		DB::table('landconnections')->insert([
            'to' => '29',
            'from' => '32'
        ]);
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '29'
        ]);
        //Scythia, Persia
		DB::table('landconnections')->insert([
            'to' => '29',
            'from' => '33'
        ]);
		DB::table('landconnections')->insert([
            'to' => '33',
            'from' => '29'
        ]);
        //Asia, Armenia
		DB::table('landconnections')->insert([
            'to' => '31',
            'from' => '32'
        ]);
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '31'
        ]);
        //Asia, Mesopotamia
		DB::table('landconnections')->insert([
            'to' => '31',
            'from' => '34'
        ]);
		DB::table('landconnections')->insert([
            'to' => '34',
            'from' => '31'
        ]);
        //Asia, Syria
		DB::table('landconnections')->insert([
            'to' => '31',
            'from' => '35'
        ]);
		DB::table('landconnections')->insert([
            'to' => '35',
            'from' => '31'
        ]);
        //Armenia, Persia
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '33'
        ]);
		DB::table('landconnections')->insert([
            'to' => '33',
            'from' => '32'
        ]);
        //Armenia, Mesopotamia
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '34'
        ]);
		DB::table('landconnections')->insert([
            'to' => '34',
            'from' => '32'
        ]);
        //Armenia, Syria
		DB::table('landconnections')->insert([
            'to' => '32',
            'from' => '35'
        ]);
		DB::table('landconnections')->insert([
            'to' => '35',
            'from' => '32'
        ]);
        //Persia, Mesopotamia
		DB::table('landconnections')->insert([
            'to' => '33',
            'from' => '34'
        ]);
		DB::table('landconnections')->insert([
            'to' => '34',
            'from' => '33'
        ]);
        //Mesopotamia, Syria
		DB::table('landconnections')->insert([
            'to' => '34',
            'from' => '35'
        ]);
		DB::table('landconnections')->insert([
            'to' => '35',
            'from' => '34'
        ]);
        //Mesopotamia, Arabia
		DB::table('landconnections')->insert([
            'to' => '34',
            'from' => '36'
        ]);
		DB::table('landconnections')->insert([
            'to' => '36',
            'from' => '34'
        ]);
        //Syria, Arabia
		DB::table('landconnections')->insert([
            'to' => '35',
            'from' => '36'
        ]);
		DB::table('landconnections')->insert([
            'to' => '36',
            'from' => '35'
        ]);
        //Aksum, Kush
		DB::table('landconnections')->insert([
            'to' => '37',
            'from' => '38'
        ]);
		DB::table('landconnections')->insert([
            'to' => '38',
            'from' => '37'
        ]);
        //Kush, Aegyptus
		DB::table('landconnections')->insert([
            'to' => '38',
            'from' => '16'
        ]);
		DB::table('landconnections')->insert([
            'to' => '16',
            'from' => '38'
        ]);
    }
}
