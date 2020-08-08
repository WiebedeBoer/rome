<?php

use Illuminate\Database\Seeder;

class ArchitectureSeeder extends Seeder
{	
	//towns
    public function run()
    {        
        //1
        DB::table('architectures')->insert([
            'architecture_name' => 'Italo Roman'
        ]);
        //2
        DB::table('architectures')->insert([
            'architecture_name' => 'Gallo Roman'
        ]);
        //3
        DB::table('architectures')->insert([
            'architecture_name' => 'Germanic Roman'
        ]);
        //4
        DB::table('architectures')->insert([
            'architecture_name' => 'Ibero Roman'
        ]);
        //5
        DB::table('architectures')->insert([
            'architecture_name' => 'Greco Roman'
        ]);
        //6
        DB::table('architectures')->insert([
            'architecture_name' => 'Punic'
        ]);
        //7
        DB::table('architectures')->insert([
            'architecture_name' => 'Thraco Roman'
        ]);
        //8
        DB::table('architectures')->insert([
            'architecture_name' => 'Arabic'
        ]);
        //9
        DB::table('architectures')->insert([
            'architecture_name' => 'Persian'
        ]);
        //10
        DB::table('architectures')->insert([
            'architecture_name' => 'Scythian'
        ]);
    }
}
