<?php

use Illuminate\Database\Seeder;

class ConstructiontypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('constructiontypes')->insert([
            'construction_name' => 'kiln',
            'category' => 'packaging',
            'subtype' => 'amphora',
            'building' => '1'        
        ]);
    }
}
