<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home
Route::get('/home', 'HomeController@index')->name('home');

//news
Route::get('news', 'NewsController@index');
Route::get('rules', 'NewsController@rules');
Route::get('terms', 'NewsController@terms');
Route::get('privacy', 'NewsController@privacy');
//users account
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

//manual
Route::get('manual', 'ManualController@index');

//forum
//forum main
Route::get('forum', 'ForumController@index');
//forum thread
Route::get('forum/create','ForumController@create');
Route::post('forum','ForumController@store');
Route::get('forum/thread/{thread}', 'ForumController@thread');
Route::delete('forum/{thread}', 'ForumController@destroy');
//forum post
Route::get('forum/{forum}/edit', 'ForumController@edit');
Route::patch('forum/{forum}', 'ForumController@update');
//subforum
Route::get('forum/open','ForumController@open');
Route::get('forum/tavern','ForumController@tavern');
Route::get('forum/intro','ForumController@intro');
Route::get('forum/faction','ForumController@faction');
Route::get('forum/region','ForumController@region');
Route::get('forum/war','ForumController@war');

//gameplay
//chronicles
Route::get('chronicles', 'ChronicleController@index');

//territorial organization
//realms
Route::get('realms', 'RealmController@index');
Route::get('realms/create','RealmController@create');
Route::post('realms','RealmController@store');
Route::get('realms/{realms}', 'RealmController@show');
Route::get('realms/{realms}/edit', 'RealmController@edit');
Route::delete('realms/{realms}', 'RealmController@destroy');
Route::patch('realms/{realms}', 'RealmController@update');
//towns
Route::get('towns', 'TownController@index');
Route::get('towns/{towns}', 'TownController@show');
Route::get('towns/{towns}/edit', 'TownController@edit');
Route::patch('towns/{towns}', 'TownController@update');

//maps
//town maps
Route::get('mappopulation','TownController@mappopulation');
Route::get('mapculture','TownController@mapculture');
Route::get('mapclimate','TownController@mapclimate');
Route::get('maproad','TownController@maproad');
Route::get('maparchitecture','TownController@maparchitecture');
//buildings maps
Route::get('maptemple','TownController@maptemple');
Route::get('maporacle','TownController@maporacle');
Route::get('maptomb','TownController@maptomb');
Route::get('mapbath','TownController@mapbath');
Route::get('maplibrary','TownController@maplibrary');
Route::get('maptheatre','TownController@maptheatre');
Route::get('mapamphitheatre','TownController@mapamphitheatre');
Route::get('maprace','TownController@maprace');
//maps food
Route::get('mapstaples','TownController@mapstaples');
Route::get('mapfruit','TownController@mapfruit');
Route::get('mapgrapes','TownController@mapgrapes');
Route::get('mapolives','TownController@mapolives');
Route::get('maphoney','TownController@maphoney');
//maps animals
Route::get('mappack','TownController@mappack');
Route::get('mapcattle','TownController@mapcattle');
Route::get('mapwool','TownController@mapwool');
Route::get('mappig','TownController@mappig');
Route::get('mappoultry','TownController@mappoultry');
Route::get('maprabbit','TownController@maprabbit');
Route::get('mapfish','TownController@mapfish');
Route::get('mapgame','TownController@mapgame');
//maps raw
Route::get('mappottery','TownController@mappottery');
Route::get('maptimber','TownController@maptimber');
Route::get('mapmarble','TownController@mapmarble');
//maps metals
Route::get('maptin','TownController@maptin');
Route::get('mapcopper','TownController@mapcopper');
Route::get('mapiron','TownController@mapiron');
Route::get('mapgold','TownController@mapgold');
Route::get('mapsilver','TownController@mapsilver');
//maps products
Route::get('mapdye','TownController@mapdye');
Route::get('mappapyrus','TownController@mappapyrus');
Route::get('mapglass','TownController@mapglass');
//maps caravans
Route::get('mapsilk','TownController@mapsilk');
Route::get('mapspice','TownController@mapspice');
Route::get('mapincense','TownController@mapincense');
Route::get('mapivory','TownController@mapivory');
//maps slavery
Route::get('mapslave','TownController@mapslave');
//maps military
Route::get('maparmy','TownController@maparmy');
//maps towns stats
Route::get('mapdefenses','TownController@mapdefenses');
Route::get('mapjustice','TownController@mapjustice');
Route::get('mapagriculture','TownController@mapagriculture');
Route::get('mapcommerce','TownController@mapcommerce');

//people
//persons
Route::get('persons', 'PersonController@index');
Route::get('persons/create','PersonController@create');
Route::post('persons','PersonController@store');
Route::get('persons/{person}', 'PersonController@show');
Route::get('persons/{person}/edit', 'PersonController@edit');
Route::delete('persons/{person}', 'PersonController@destroy');
Route::patch('persons/{person}', 'PersonController@update');

//agricultural organization
//villas
Route::get('villas', 'VillaController@index');
Route::get('villas/create','VillaController@create');
Route::post('villas','VillaController@store');
Route::get('villas/{villas}', 'VillaController@show');
Route::get('villas/{villas}/edit', 'VillaController@edit');
Route::delete('villas/{villas}', 'VillaController@destroy');
Route::patch('villas/{villas}', 'VillaController@update');
//workshops
Route::get('workshops', 'WorkshopController@index');
Route::get('workshops/create','WorkshopController@create');
Route::post('workshops','WorkshopController@store');
Route::get('workshops/{workshops}', 'WorkshopController@show');
Route::get('workshops/{workshops}/edit', 'WorkshopController@edit');
Route::delete('workshops/{workshops}', 'WorkshopController@destroy');
Route::patch('workshops/{workshops}', 'WorkshopController@update');

//trade
//trade
Route::get('trade', 'TradeController@index');
Route::get('trade/create','TradeController@create');
Route::post('trade','TradeController@store');
Route::get('trade/{trade}', 'TradeController@show');
Route::get('trade/{trade}/edit', 'TradeController@edit');
Route::delete('trade/{trade}', 'TradeController@destroy');
Route::patch('trade/{trade}', 'TradeController@update');
//caravans
Route::get('caravans', 'CaravanController@index');
Route::get('caravans/create','CaravanController@create');
Route::post('caravans','CaravanController@store');
Route::get('caravans/{caravans}', 'CaravanController@show');
Route::get('caravans/{caravans}/edit', 'CaravanController@edit');
Route::delete('caravans/{caravans}', 'CaravanController@destroy');
Route::patch('caravans/{caravans}', 'CaravanController@update');

//military
//armies
Route::get('armies', 'ArmyController@index');
Route::get('armies/create','ArmyController@create');
Route::post('armies','ArmyController@store');
Route::get('armies/{armies}', 'ArmyController@show');
Route::get('armies/{armies}/edit', 'ArmyController@edit');
Route::delete('armies/{armies}', 'ArmyController@destroy');
Route::patch('armies/{armies}', 'ArmyController@update');
//fleets
Route::get('fleets', 'FleetController@index');
Route::get('fleets/create','FleetController@create');
Route::post('fleets','FleetController@store');
Route::get('fleets/{fleets}', 'FleetController@show');
Route::get('fleets/{fleets}/edit', 'FleetController@edit');
Route::delete('fleets/{fleets}', 'FleetController@destroy');
Route::patch('fleets/{fleets}', 'FleetController@update');
//battles
Route::get('battles', 'BattleController@index');
Route::get('battles/create','BattleController@create');
Route::post('battles','BattleController@store');
Route::get('battles/{battles}', 'BattleController@show');
Route::get('battles/{battles}/edit', 'BattleController@edit');
Route::delete('battles/{battles}', 'BattleController@destroy');
Route::patch('battles/{battles}', 'BattleController@update');

//politics
//court
Route::get('court', 'CourtController@index');
Route::get('court/{court}', 'CourtController@show');
Route::get('court/{court}/edit', 'CourtController@edit');
Route::patch('court/{court}', 'CourtController@update');
//diplomacy
Route::get('diplomacy', 'DiplomacyController@index');
Route::get('diplomacy/create','DiplomacyController@create');
Route::post('diplomacy','DiplomacyController@store');
Route::get('diplomacy/{diplomacy}', 'DiplomacyController@show');
Route::get('diplomacy/{diplomacy}/edit', 'DiplomacyController@edit');
Route::delete('diplomacy/{diplomacy}', 'DiplomacyController@destroy');
Route::patch('diplomacy/{diplomacy}', 'DiplomacyController@update');