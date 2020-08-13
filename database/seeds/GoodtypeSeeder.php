<?php

use Illuminate\Database\Seeder;

class GoodtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pack animals
		DB::table('goodtypes')->insert([
            'good_name' => 'horses',
            'good_category' => 'pack'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'camels',
            'good_category' => 'pack'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'donkeys',
            'good_category' => 'pack'
        ]);
        //livestock
		DB::table('goodtypes')->insert([
            'good_name' => 'cattle',
            'good_category' => 'livestock'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'sheep',
            'good_category' => 'livestock'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'goats',
            'good_category' => 'livestock'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'pigs',
            'good_category' => 'livestock'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'rabbits',
            'good_category' => 'livestock'
        ]);
        //poultry
		DB::table('goodtypes')->insert([
            'good_name' => 'chickens',
            'good_category' => 'poultry'
        ]);
        //ducks
		DB::table('goodtypes')->insert([
            'good_name' => 'ducks',
            'good_category' => 'ducks'
        ]);
        //dogs
		DB::table('goodtypes')->insert([
            'good_name' => 'dogs',
            'good_category' => 'dogs'
        ]);
        //wild animals
		DB::table('goodtypes')->insert([
            'good_name' => 'bear',
            'good_category' => 'wild'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'lion',
            'good_category' => 'wild'
        ]);
        //wild game
		DB::table('goodtypes')->insert([
            'good_name' => 'boar',
            'good_category' => 'game'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'deer',
            'good_category' => 'game'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'hare',
            'good_category' => 'game'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'pheasants',
            'good_category' => 'poultry'
        ]);
        //fruit
		DB::table('goodtypes')->insert([
            'good_name' => 'apples',
            'good_category' => 'fruit'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'grapes',
            'good_category' => 'fruit'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'olives',
            'good_category' => 'fruit'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'figs',
            'good_category' => 'fruit'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'dates',
            'good_category' => 'fruit'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'pomegranates',
            'good_category' => 'fruit'
        ]);
        //grains
		DB::table('goodtypes')->insert([
            'good_name' => 'rye',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'oats',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'barley',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'einkorn wheat',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'spelt wheat',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'durum wheat',
            'good_category' => 'grains'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'emmer wheat',
            'good_category' => 'grains'
        ]);
        //wine
		DB::table('goodtypes')->insert([
            'good_name' => 'wine',
            'good_category' => 'wine'
        ]);
        //seasonings
		DB::table('goodtypes')->insert([
            'good_name' => 'olive oil',
            'good_category' => 'seasoning'
        ]);
        //sweeteners
		DB::table('goodtypes')->insert([
            'good_name' => 'honey',
            'good_category' => 'sweetener'
        ]);
        //fish
        DB::table('goodtypes')->insert([
            'good_name' => 'anchovy',
            'good_category' => 'fish'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'sardines',
            'good_category' => 'fish'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'sturgeon',
            'good_category' => 'fish'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'mackerel',
            'good_category' => 'fish'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'herring',
            'good_category' => 'fish'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'tuna',
            'good_category' => 'fish'
        ]);
        //foodstuff
        DB::table('goodtypes')->insert([
            'good_name' => 'meat',
            'good_category' => 'food'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'cheese',
            'good_category' => 'food'
        ]);
        DB::table('goodtypes')->insert([
            'good_name' => 'fish',
            'good_category' => 'food'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'vegetables',
            'good_category' => 'food'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'fruit',
            'good_category' => 'food'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'bread',
            'good_category' => 'food'
        ]);
        //wool
		DB::table('goodtypes')->insert([
            'good_name' => 'wool',
            'good_category' => 'wool'
        ]);
        //flax
		DB::table('goodtypes')->insert([
            'good_name' => 'flax',
            'good_category' => 'flax'
        ]);
        //flax
		DB::table('goodtypes')->insert([
            'good_name' => 'hides',
            'good_category' => 'hides'
        ]);
        //clothing
		DB::table('goodtypes')->insert([
            'good_name' => 'leather',
            'good_category' => 'clothing'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'cloth',
            'good_category' => 'clothing'
        ]);
        //finished products
		DB::table('goodtypes')->insert([
            'good_name' => 'scents',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'medicine',
            'good_category' => 'products'
        ]);
        //finished products
		DB::table('goodtypes')->insert([
            'good_name' => 'clothing',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'leatherwork',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'glasswork',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'pottery',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'furniture',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'jewelry',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'furniture',
            'good_category' => 'products'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'jewelry',
            'good_category' => 'products'
        ]);
        //construction materials
		DB::table('goodtypes')->insert([
            'good_name' => 'timber',
            'good_category' => 'construction'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'bronze',
            'good_category' => 'construction'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'hardware',
            'good_category' => 'construction'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'clay',
            'good_category' => 'construction'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'marble',
            'good_category' => 'construction'
        ]);
        //carvings
		DB::table('goodtypes')->insert([
            'good_name' => 'ivory',
            'good_category' => 'carving'
        ]);
        //timber
		DB::table('goodtypes')->insert([
            'good_name' => 'oak',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'yew',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'beech',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'juniper',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'pine',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'cypress',
            'good_category' => 'timber'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'palm',
            'good_category' => 'timber'
        ]);
        //cedar
		DB::table('goodtypes')->insert([
            'good_name' => 'cedar',
            'good_category' => 'cedar'
        ]);
        //scents
		DB::table('goodtypes')->insert([
            'good_name' => 'incense',
            'good_category' => 'scent'
        ]);
        //silk imports
		DB::table('goodtypes')->insert([
            'good_name' => 'silk',
            'good_category' => 'fabric'
        ]);
        //spice imports
		DB::table('goodtypes')->insert([
            'good_name' => 'spices',
            'good_category' => 'spice'
        ]);
        //silphium
		DB::table('goodtypes')->insert([
            'good_name' => 'silphium',
            'good_category' => 'silphium'
        ]);
        //saffron
		DB::table('goodtypes')->insert([
            'good_name' => 'saffron',
            'good_category' => 'saffron'
        ]);
        //dyes
		DB::table('goodtypes')->insert([
            'good_name' => 'woad',
            'good_category' => 'dye'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'madder',
            'good_category' => 'dye'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'indigo',
            'good_category' => 'dye'
        ]);
        //metals
		DB::table('goodtypes')->insert([
            'good_name' => 'tin',
            'good_category' => 'metal'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'copper',
            'good_category' => 'metal'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'iron',
            'good_category' => 'metal'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'gold',
            'good_category' => 'metal'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'silver',
            'good_category' => 'metal'
        ]);
        //paper
		DB::table('goodtypes')->insert([
            'good_name' => 'papyrus',
            'good_category' => 'paper'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'parchment',
            'good_category' => 'paper'
        ]);
        //books and scrolls
		DB::table('goodtypes')->insert([
            'good_name' => 'scroll',
            'good_category' => 'book'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'book',
            'good_category' => 'book'
        ]);
        //chattel
		DB::table('goodtypes')->insert([
            'good_name' => 'slaves',
            'good_category' => 'chattel'
        ]);
        //glass
		DB::table('goodtypes')->insert([
            'good_name' => 'glass',
            'good_category' => 'glass'
        ]);
        //weapons
		DB::table('goodtypes')->insert([
            'good_name' => 'bow',
            'good_category' => 'weapon'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'spear',
            'good_category' => 'weapon'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'sword',
            'good_category' => 'weapon'
        ]);
        //armor
		DB::table('goodtypes')->insert([
            'good_name' => 'leather armor',
            'good_category' => 'armor'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'mail armor',
            'good_category' => 'armor'
        ]);
		DB::table('goodtypes')->insert([
            'good_name' => 'plate armor',
            'good_category' => 'armor'
        ]);

    }
}
