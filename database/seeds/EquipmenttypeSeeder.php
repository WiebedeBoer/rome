<?php

use Illuminate\Database\Seeder;

class EquipmenttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //armor
        //torso armor and clothing
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Tunic',
            'equipment_category' => 'torso armor'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Leather Armor',
            'equipment_category' => 'torso armor'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Lorica Segmentata',
            'equipment_category' => 'torso armor'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Lorica Hamata',
            'equipment_category' => 'torso armor'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Lorica Squamata',
            'equipment_category' => 'torso armor'
        ]);
        //limb armor
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Manica',
            'equipment_category' => 'limb armor'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Greave',
            'equipment_category' => 'limb armor'
        ]);
        //shields
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Scutum',
            'equipment_category' => 'shield'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Parma',
            'equipment_category' => 'shield'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Caetra',
            'equipment_category' => 'shield'
        ]);
        //helmets
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Galea',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Corinthian Helmet',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Boeotian Helmet',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Attic Helmet',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Illyrian Helmet',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Phrygian Helmet',
            'equipment_category' => 'helmet'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Coolus Helmet',
            'equipment_category' => 'helmet'
        ]);
        //boots
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Caligae',
            'equipment_category' => 'boots'
        ]);
        //weapons
        //swords
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Pugio',
            'equipment_category' => 'dagger'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Gladius',
            'equipment_category' => 'sword'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Spatha',
            'equipment_category' => 'sword'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Falx',
            'equipment_category' => 'sword'
        ]);
        //spears
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Hasta',
            'equipment_category' => 'spear'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Sarissa',
            'equipment_category' => 'spear'
        ]);
        //javelins
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Pilum',
            'equipment_category' => 'javelin'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Verutum',
            'equipment_category' => 'javelin'
        ]);
        DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Lancea',
            'equipment_category' => 'javelin'
        ]);
        //bows
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Bow',
            'equipment_category' => 'bow'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Crossbow',
            'equipment_category' => 'bow'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Compound Bow',
            'equipment_category' => 'bow'
        ]);
        //siege
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Ballista',
            'equipment_category' => 'siege'
        ]);
		DB::table('equipmenttypes')->insert([
            'equipment_name' => 'Scorpio',
            'equipment_category' => 'siege'
        ]);
    }
}
